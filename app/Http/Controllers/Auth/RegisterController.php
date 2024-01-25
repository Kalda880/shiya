<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Customer;
use App\Models\Designer;
use App\Models\SiteUser;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // return Validator::make($data, [
        //     'name'     => ['required', 'string', 'max:255'],
        //     'email'    => ['required', 'string', 'email', 'max:255', 'unique:users', 'unique:designers', 'unique:customers'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function register(Request $request)
    {
        $data = $request->all();
        //return dd($data);
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users,email', 'unique:designers,email', 'unique:customers,email'],
            'password' => ['required', 'string', 'min:8'],
            'phone'    => ['required', 'string',  'max:255',  'unique:designers,phone', 'unique:customers,phone'],

        ]);

       $code = $request->code;

         $affiliate = SiteUser::where('code', $code)->first();

        if($affiliate){

            $affiliate =    $affiliate->id;

        }else{

            $affiliate = Null;
        }



       $user = SiteUser::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
            'phone'    => $data['phone'],
            'affiliate_id' => $affiliate,
            'customer_status'   => true,
            'role' =>'customer',
            'is_customer'=>true,
            'is_designer'=>true,
            'is_affiliate'=>true,
            "code"=>\Str::random(10)

        ]);

        session()->flash('success', trans('messages.success_register'));

        return myRedirectRoute('index');
    }


    protected function registerDesigner(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users,email', 'unique:designers,email', 'unique:customers,email'],
            'password' => ['required', 'string', 'min:8'],
            'phone'    => ['required', 'string',  'max:255',  'unique:designers,phone', 'unique:customers,phone'],

        ]);

       



       $user = SiteUser::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
            'phone'    => $data['phone'],
            'designer_status'   => false,
            'role' =>'designer',
            'is_designer'=>true
        ]);

        session()->flash('success', trans('messages.success_register'));

        return myRedirectRoute('index');
    }
}
