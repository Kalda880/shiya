<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Editor\Design\DesignResource;
use App\Models\Designer;
use App\Models\SiteUser;
use App\Models\DesignElement;
use App\Models\Design;
use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\CustomerDesign;
use Illuminate\Support\Facades\Crypt;

class DesignerEditorController extends Controller
{

    public function design($id, $designerid)
    {
        try {
            $designerid = Crypt::decrypt($designerid);
        } catch (\Throwable $th) {

           return response()->json(['error' => 'You are not the owner of this design'], 403);
        }


         $design     = Design::where('id', $id)->where('designer_id', $designerid)->first();

         if(!$design){
            return response()->json(['error' => 'You are not the owner of this design'], 403);
         }

            return  new DesignResource($design);
    }




    public function store(Request $request)
    {


        $safe = $request->validate([
            'designer_id' => 'required',
            'design_id'   => 'required',
        ]);
        


        try {

            $designerid = Crypt::decrypt($request->designer_id);

        } catch (\Throwable $th) {

           return response()->json(['error' => 'You are not the owner of this design'], 403);
        }


        $design = Design::where('id', $request->design_id)->where('designer_id', $designerid)->first();

        if(!$design){
            return response()->json(['error' => 'You are not the owner of this design'], 403);
        }

        $designer = SiteUser::where('is_designer',1)->find($designerid);

        if(!$designer){
            return response()->json(['error' => 'You are not the owner of this design'], 403);
        }

    //      save all the request data in a variable

    $data = $request->all();


    $image_64 = $data['design_img']; //your base64 encoded data

    $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];   // .jpg .png .pdf

    $replace = substr($image_64, 0, strpos($image_64, ',')+1);

  // find substring fro replace here eg: data:image/png;base64,

   $image = str_replace($replace, '', $image_64);

   $image = str_replace(' ', '+', $image);

   $imageName = Str::random(10).'.'.$extension;

    Storage::disk('public')->put('images/' .  $imageName, base64_decode($image));


        $design ->update([

                        'images'       => $imageName,
                        'backGround'  => $request->backGround,

                            ]);

        $design->elements()->delete();


        foreach ($request->data as $key => $value) {

            // save array in json element

            $element_data = json_encode($value);

            // save the data in the database

            DesignElement::create([
                'designs_id'   => $design->id,
                'element'      => $key,
                'element_data' => $element_data,
            ]);
        }

    //      save the data in the database


        return response()->json(['success' => 'Data is successfully added']);

    }
}
