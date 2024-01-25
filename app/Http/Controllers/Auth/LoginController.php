<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Symfony\Component\HttpFoundation\Request;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout','changeRole']);
    }
    public function logout(Request $request)
    {
        $this->guard('site_users')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }
    public function changeRole($role){
        if(!auth('site_users')->check())
        return  myRedirectRoute('login');
        if(!in_array($role,['designer','customer','affiliate']))
        {
            session()->flash('error','ليس هناك اي دور بهذا الاسم');
            return back();
        }
        $user = auth('site_users')->user();
        $user->role = $role;
        $user->save();
        return myRedirectRoute($role.'.'); 
    }
    public function login(Request $request)
    {
        if(auth()->guard('site_users')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user =  auth('site_users')->user();
            
            if(!$user->role){
                $user->role = 'customer';
                $user->save();
            }
            if(in_array($user->role,['designer','affiliate','customer'])  ){
              //return dd($user);
                return myRedirectRoute($user->role.'.');
            }
        }
/*
        if(auth()->guard('designer')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return  myRedirectRoute('designer.');

        }elseif(auth()->guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])){

            return  myRedirectRoute('customer.');

        }elseif(auth()->guard('affiliate')->attempt(['email' => $request->email, 'password' => $request->password])){

            return  myRedirectRoute('affiliate.');

        }*/
        else{

        return redirect()->back()->withErrors(trans('auth.failed')/*'Email or password are wrong.'*/);
        }
    }
}
