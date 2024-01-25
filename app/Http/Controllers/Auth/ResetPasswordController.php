<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Symfony\Component\HttpFoundation\Request;
use App\Models\SiteUser;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    function resetPasswordForm($token){
        return view("auth.passwords.reset", compact('token'));
    }
    function resetPasswordSubmit(Request $request){
        $safe = $request->validate([
            "email" => 'required|email|exists:customers',
            "password" => 'required|confirmed',
            "password_confirmation" => 'required|same:password'
        ]);
        $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $request->email, 
                                'token' => $request->token
                              ])
                              ->first();
        
          if(!$updatePassword){
              return back()->withInput()->with('error', trans('passwords.token'));
          }
        
          $user = SiteUser::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);
        
          DB::table('password_resets')->where(['email'=> $request->email])->delete();
        
          return myRedirectRoute('login')->with('message', trans('passwords.reset'));
          
    }
}
