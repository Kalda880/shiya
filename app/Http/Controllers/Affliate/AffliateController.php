<?php

namespace App\Http\Controllers\Affliate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;

class AffliateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth('site_users')->user();
        $payments = Payment::where("affiliate_id", $user->id)->with('customer','design')->get();
        $users = $user->customers;

        return view('affiliate.index', compact('users', 'payments'));
    }


    public function profile()
    {
        $user = auth('site_users')->user();

        return view('affiliate.profile', compact('user'));
    }


    public function updateprofile(Request $request)
    {
        $user = auth('site_users')->user();

        $request->validate([
            'name'     => 'required|min:3',
            'email'    => 'required|email|unique:affiliates,email,' . $user->id,
            'phone'    => 'required|unique:affiliates,phone,' . $user->id,
            'image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'nullable|min:6|confirmed',
            'code'     => 'required|unique:affiliates,code,' . $user->id,
        ]);

        $input = $request->except(['image', 'password', 'password_confirmation']);

        if ($request->hasFile('image')) {
            $input['image'] = $this->uploadImage($request->file('image'));
        }

        if ($request->has('password')) {
            $input['password'] = bcrypt($request->password);
        }

        $user->update($input);

       session()->flash('success', trans('messages.profile_updated_succes'));

        return myRedirectRoute('affiliate.');

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
    public function update(Request $request, $id)
    {
        //
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
