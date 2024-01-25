<?php

namespace App\Http\Controllers\Editor;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Design;
use App\Models\DesignElement;
use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;
use App\Http\Resources\Editor\Design\DesignResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\CustomerDesign;
use App\Models\Project;
use App\Models\Projectelement;
use Illuminate\Support\Facades\Crypt;
class ProjectController extends Controller
{

    public function store(Request $request)
    {

            $request->validate([
                'customer_id' => 'required',
                'title' => 'required',
            ]);

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

            // Move Image To Public Folder


            try {
                $customerId = Crypt::decrypt($request->customer_id);
            } catch (\Throwable $th) {

            return response()->json(['error' => 'You are not the owner of this design'], 403);
            }

        $design =    Project::create([
                                'title'       => request('title'),
                                'customer_id' => $customerId,

                                'images'       => $imageName,
                                'content'     => 'test content',
                                'price'       => 0,
                                'backGround'  => $request->backGround,
                            ]);

            //      decode the data from json to array



            //      loop through the array and save the data in the database


            foreach ($request->data as $key => $value) {

                // save array in json element

                $element_data = json_encode($value);

                // save the data in the database

                Projectelement::create([
                    'project_id'   => $design->id,
                    'element'      => $key,
                    'element_data' => $element_data,
                ]);
            }

            //      save the data in the database


                return response()->json(['success' => 'Data is successfully added']);
    }

   

   
    public function update(Request $request, $id)
    {
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
