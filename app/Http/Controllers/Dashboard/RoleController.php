<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::where('id', '!=', 1)->latest()->get();

        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('admin.roles.create');
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

            'name'           => 'required|unique:roles,name',
            'permissions'    => 'required|array',
         ]);

         $role = Role::create(['name' => $request->name]);

         $role->attachPermissions($request->permissions);

          session()->flash('message', 'تمت الاضافة بنجاح');

            return  myRedirectRoute('dashboard.roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id ==1){
            abort(403);
        }

       $role = Role::findOrFail($id);

       return view('admin.roles.edit', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id ==1){
            abort(403);
        }

       $role = Role::findOrFail($id);

       return view('admin.roles.edit', compact('role'));
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
        $role = Role::findOrFail($id);

        if($id ==1){
            abort(403);
        }

        $request->validate([

            'name'           => 'required',
            'permissions'    => 'required|array',
         ]);

         $role->update(['name' => $request->name]);

         $role->detachPermissions();

         $role->attachPermissions($request->permissions);

         session()->flash('message', 'تمت الاضافة بنجاح');

         return  myRedirectRoute('dashboard.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = Role::findOrFail($id)->delete();

        session()->flash('message', 'تمت المسح بنجاح');

        return  myRedirectRoute('dashboard.roles.index');
    }
}
