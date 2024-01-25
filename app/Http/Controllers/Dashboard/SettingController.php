<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Terms;
use App\Models\Privacy;
use App\Models\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.settings.index_old');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms ()
    {
       $term = Terms::first();

         return view('admin.settings.terms', compact('term'));
    }


    public function privacy ()
    {
       $term = Privacy::first();

         return view('admin.settings.privacy', compact('term'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateterms(Request $request)
    {
        $term = Terms::first();

        $term->update($request->all());

        return redirect()->back()->with('success', 'تم التعديل بنجاح');
    }

    public function updateprivacy(Request $request)
    {
        $term = Privacy::first();

        $term->update($request->all());

        return redirect()->back()->with('success', 'تم التعديل بنجاح');
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



        $request->validate([
            'title'           => 'required|min:3',
            'email'           => 'required|email',
            'phone'           => 'required',
            'logo'            => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'favicon'         => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'footer_logo'     => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'footer_text'     => 'required|min:3',

        ]);

        $input = $request->except('logo', 'favicon', 'footer_logo');

        if ($request->hasFile('logo')) {
            $input['logo'] = $this->uploadImage($request->logo);
        }

        if ($request->hasFile('favicon')) {
            $input['favicon'] = $this->uploadImage($request->favicon);
        }

        if ($request->hasFile('footer_logo')) {
            $input['footer_logo'] = $this->uploadImage($request->footer_logo);
        }

        $setting = Setting::first();



        $setting->update($input);


        session()->flash('success', 'تم التعديل بنجاح');

        return redirect()->back();


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
