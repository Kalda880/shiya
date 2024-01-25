<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('guest')->except(['logout']);
    }
    public function showlogin ()
    {
        return view('admin.auth.login');
    }
 
    public function logout(Request $request)
    {
        $this->guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect()->route('dashboard.login');
    }
 
    public function login (Request $request)
    {

        $credentials = $request->only('email', 'password');

        if ($this->guard()->attempt($credentials)) {
            
            return redirect()->intended('dashboard');
        }


        return  myRedirectRoute('dashboard.login')->with('error', 'Email-Address And Password Are Wrong.');
    }

    
    protected function guard()
    {
        return Auth::guard();
    }

}
