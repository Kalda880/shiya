<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
class StudioController extends Controller
{
    function validateKey()  {
 return ['is_valid'=>true,'is_paid'=>true,'is_domain'=>true,'remove_background_inclided'=>true];
    }
    function getGoogleFonts() {
        $file = file_get_contents(public_path('get-google-fonts.json'));
    $jsonData = json_decode($file, true);
     return response()->json($jsonData , 200);
    }
    function getBasicShapes() {
        $file = file_get_contents(public_path('get-basic-shapes.json'));
        $jsonData = json_decode($file, true);
        return response()->json($jsonData , 200);
    }
    function anyUrl(){
   $uri = Str::after(request()->path(), 'api/studio/');
   $query = Arr::query(request()->query());
   $method = request()->method();
   if($method == 'GET') {
    $response = Http::get("https://api.polotno.dev/api/$uri?$query");
    return $response;
   }
   $response = Http::post("https://api.polotno.dev/api/$uri?$query");
   return $response;
        return dd($uri,$query,$method);
    }
}
