<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerDesign;
use App\Models\Project;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designs = CustomerDesign::where('customer_id', auth('site_users')->user()->id)->count();

        $projects = Project::where('customer_id', auth()->guard('site_users')->user()->id)->count();


        return view('customer.index', compact('designs', 'projects'));

    }


    public function designs()
    {
        $designs = CustomerDesign::where('customer_id', auth('site_users')->user()->id)->get();

        return view('customer.designs', compact('designs'));
    }



    public function profile()
    {
        return view('customer.profile');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateprofile(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:site_users,email,'.auth('site_users')->user()->id,
            'phone' => 'required|unique:site_users,phone,'.auth('site_users')->user()->id,
            'code' =>'nullable|unique:site_users,code,'.auth('site_users')->user()->id.',id'

        ]);

        $user = auth('site_users')->user();

        $input = $request->except('image', 'password');

        if ($request->hasFile('image')) {

            $input['image'] = $this->uploadImage($request->image);
        }

        $user->update($input);


        return redirect()->back()->with('success', trans('messages.Profile Updated Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
