<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Design;
use App\Models\Project;
use App\Models\SiteUser;
use App\Models\DesignElement;
use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;
use App\Http\Resources\Editor\Design\DesignResource;
use App\Http\Resources\Editor\Design\DesignElementResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\CustomerDesign;

use Illuminate\Support\Facades\Crypt;
class EditorController extends Controller
{

    public function store(Request $request)
    {

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


  $design =    Design::create([
                        'title'       => 'test title',
                        'designer_id' => 1,
                        'category_id' => 1,
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

        DesignElement::create([
            'designs_id'   => $design->id,
            'element'      => $key,
            'element_data' => $element_data,
        ]);
    }

    //      save the data in the database


        return response()->json(['success' => 'Data is successfully added']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $userid, $designType="design")
    {
        //$type = "design" or "project"
        try {
            $userId = Crypt::decrypt($userid);
        } catch (\Throwable $th) {

           return response()->json(['error' => 'You are not the owner of this design'], 403);
        }

        $customer = SiteUser::find($userId);
        
        switch($designType)
        {
            case "design":
            {
                $design = Design::find($id);
                if(!$design) {
                    return response()->json(['error' => 'Design not found'], 404);
                }
        
                // check if the user is the owner of the design
        
                $exists = CustomerDesign::where('customer_id', $customer->id)
                                        ->where('design_id', $design->id)
                                        ->exists();
        
                if(!$exists) {
                    return response()->json(['error' => 'You are not the owner of this design'], 403);
                }
        
                return  new DesignResource($design);
            }
            
            case "project":
            {
                $project = Project::findOrFail($id);
                
                if($project->customer->id !== $userId) 
                    response()->json(['error' => 'You are not the owner of this design'], 403);
                
                return ["data" => ['title'=>$project->title,'elements' => DesignElementResource::collection($project->elements)]];
            }
        }


        

        
    }





}
