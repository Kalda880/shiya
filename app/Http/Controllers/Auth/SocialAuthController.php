<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\SiteUser;

class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
		    request()->session()->put('state_type', 'login');
        $redirect = Socialite::driver('google')->with(['shya' => 'login'])->redirect();
		//return dd($redirect, Socialite::driver('google'));
		return $redirect;
    }
    public function redirectToGoogleRegister()
    {
		    request()->session()->put('state_type', 'register');

        return Socialite::driver('google') ->with(['shya' => 'register'])->redirect();
    }
    public function handleGoogleCallback(){
    
	$state_type = request()->session()->pull('state_type');
            try {
    
          //return dd($state_type,request()->session()->get('state'),Socialite::driver('google'));
    
                $user = Socialite::driver('google')->user();
               
                $finduser = SiteUser::where('email',$user->email)->first();
                
                if($finduser){
                    if(!$finduser->google_id){
                        $finduser->google_id = $user->id;
                        $finduser->save();
                    }
                    auth('site_users')->login($finduser);
                    request()->merge(['code'=>null]);
                    return myRedirectRoute($finduser->role.'.');
                }elseif($state_type=='register') {
					
                    $d = SiteUser::where ('name',$user->name)->first();
                    $newUser = SiteUser::create([
                        'name' => $d?$user->email:$user->name,
                        'email' => $user->email,
                        'google_id'=> $user->id,
                        'password' => encrypt(\Str::random(8)),
                        'role' =>'customer',
                        'customer_status'=> true,
                        'designer_status'=> false,
                        'affiliate_status'=> false,
                        'is_customer' => true,
                        'is_designer' => true,
                        'is_affiliate' => false
                    ]);
    
                    auth('site_users')->login($newUser);
                    request()->merge(['code'=>null]);
                    return myRedirectRoute($newUser->role.'.');
                  

               
                }else{
                    request()->merge(['code'=>null]);
					 return myRedirectRoute('login')->withErrors(trans('auth.failed'));
				}
    
          
    
            } catch (Exception $e) {
    
                session()->flash('error',$e->getMessage());
                return back();
    
            }
    
        }
    
    
}
