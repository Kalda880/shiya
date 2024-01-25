<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class AdminsController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users = User::where('id', '!=', 1)->latest()->get();

         return view('admin.admins.index', compact('users'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('id', '!=', 1)->get();

         return view('admin.admins.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([

            'name'     => 'required|min:3',

            'email'    => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'role_id'  => 'required|numeric',
        ]);

        $input = $request->except(['role_id', 'password', 'password_confirmation', 'image']);

        $file = $request->file('image');

        if($file){

             $input['image'] =   $this->uploadImage($request->file('image'));

        }

        $input['password'] = bcrypt($request->password);

        $input['is_admin'] = 1;

        $user =  User::create($input);


        $user->attachRole($request->role_id);


        session()->flash('message', 'تمت الاضافة بنجاح');

        return myRedirectRoute('dashboard.admins.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user = User::findOrFail($id);

         $roles = Role::where('id', '!=', 1)->get();

         return view('admin.admins.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'name'     => 'required|min:3',

            'email'    => 'required|email|unique:users,email,' . $id,
            'role_id'  => 'required',
        ]);

        $user = User::findOrFail($id);

        $input = $request->except(['image', 'password', 'password_confirmation']);

        $file = $request->file('image');

        if($file){

            $input['image'] =   $this->uploadImage($request->file('image'));

        }else{

            $input['image'] = $user->image;
        }

        if($request->password && ! is_null($request->password)){

            $request->validate([
                'password' => 'required|confirmed|min:8',
            ]);



            $input['password'] = bcrypt($request->password);

        }else{


            $input['password'] = $user->password;
        }


        $user->update($input);

        $user->detachRoles();

        $user->attachRole($request->role_id);



        session()->flash('message', 'تمت الاضافة بنجاح');

        return redirect('dashboard/admins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();


        session()->flash('message', 'تمت المسح بنجاح');

        return redirect('dashboard/admins');

    }
}
