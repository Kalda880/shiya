<?php

use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

function rolesModel(){


     return [
        'designs'  ,
        'category'  ,
        'tag'       ,
        'ticket'    ,
        'coupon'    ,
        'skill'     ,
        'designer'  ,
        'customer'  ,
        'settings'  ,
        'reports'   ,
        'marketing' ,
        'admin'     ,
     ];

}

function setting_value($name){
    $field = 'CONFIG_'.$name;

   return defined($field)?constant($field):null;
}

function rolesMap(){

    return  ['read', 'create', 'update', 'delete'];

}

function displayImage($image_url){
    return \Str::startsWith($image_url,'http')?$image_url:url('images/'.$image_url);
}

function categoryImage($item){
    return \Str::startsWith($item->image,'http')?$item->image:url('images/'.$item->image);
}
function designImage($image){

    return asset('storage/images/' .  $image);
}
function myRedirectRoute($route,$paras = []){
    $arg = $paras;
    if(request('code') && is_array($arg)){
        if(!array_key_exists('code',$arg)){
            $arg =[...$arg,'code'=>request('code')];
         }
        }
     return redirect()->route($route, $arg);
}
function myRoute($route,$paras = []){
    $arg = $paras;
    if(request('code') && is_array($arg)){
        if(!array_key_exists('code',$arg)){
            $arg =[...$arg,'code'=>request('code')];
         }
        }
    return route($route,$arg);
}
function crypt_encrypt($text){
    return Crypt::encryptString($text);
}
function crypt_decrypt($crypted){
    return Crypt::decryptString($crypted);
}
function designLink($id,$designType="design"){

    $user = Auth::guard('site_users')->user();//customer

    $userid = Crypt::encrypt($user->id);

    $editor = env('EDITOR_URL');

    return $editor . '?design=' . $id . '&token=' .   $userid . '&type=user'.'&designType='.$designType;

}


function designLinkAdmin($id){

    $user   = Auth::guard('site_users')->user();

    $userid = Crypt::encrypt($user->id);

    $editor = env('EDITOR_URL');

    return $editor . '?design=' . $id . '&token=' .   $userid . '&type=admin';

}



function invoiceNumber(){

    $todayCount = Payment::whereDate('created_at', Carbon::today())->count();

    $last = $todayCount;

    $last = $last + 1;

    if($last < 10){
        $last = '00' . $last;
    }elseif($last < 100){
        $last = '0' . $last;
    }

    $today = Carbon::now()->format('md');

    $year   = Carbon::now()->format('y');

    $year = substr($year, 1);

    $date =    $year  . $today . $last;

    return $date;
}


function routeName(){

    return \Request::route()->getName();

}
