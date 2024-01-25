<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Str;
use Carbon\Carbon; 
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
    public function sendLinkResetPassword()
    {
        
            request()->validate([
                      'email' => 'required|email|exists:site_users',
                  ]);
          
                  $token = Str::random(64);
          
                  \DB::table('password_resets')->insert([
                      'email' => request()->email, 
                      'token' => $token, 
                      'created_at' => Carbon::now()
                    ]);
          $url = myRoute('password.reset.form', ['token' => $token]);
                  Mail::to(request()->email)

                  ->send(new  \App\Mail\ResetPassword($url));
                  /*raw('Reset your password from here : '.myRoute('password.reset.form', ['token' => $token]), function($message) use($request){
                      $message->to(request()->email);
                      $message->from(env('MAIL_FROM_ADDRESS'),"شية");
                      $message->subject('messages.Reset Password');
                  });*/
          
                  return back()->with('message', trans('passwords.sent'));
        
    }
}
