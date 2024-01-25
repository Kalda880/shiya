<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use App\Models\SiteUser;
use Illuminate\Http\Request;

class AffiliateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affiliate = SiteUser::where('is_affiliate',1)->get();

        return view('admin.affiliate.index', compact('affiliate'));
    }

    public function create()
    {
      return view('admin.affiliate.create');
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
            'name'     => 'required',
            'email'    => 'required|email|unique:affiliates',
            'code'    => 'required|unique:affiliates',
            'phone'    => 'required|unique:affiliates',
            'password' => 'required|min:6|confirmed',
            'image'    => 'required',
        ]);

            $data = $request->except(['password', 'password_confirmation', 'image']);

            $data['password'] = bcrypt($request->password);

            $data['image'] = $this->uploadImage($request->image);
            $data['is_affiliate'] = true;
            $data['is_customer'] = true;
            $data['affiliate_status'] = true;
            $data['customer_status'] = true;

            SiteUser::create($data);

            session()->flash('success', 'تم اضافة المسوق بنجاح' );

            return  myRedirectRoute('dashboard.affiliate.index');
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
        $affiliate = SiteUser::find($id);

        return view('admin.affiliate.edit', compact('affiliate'));
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
        $affiliate = SiteUser::find($id);

        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:affiliates,email,' . $affiliate->id,
            'phone'    => 'required|unique:affiliates,phone,' . $affiliate->id,
            'password' => 'nullable|min:6|confirmed',
            'image'    => 'nullable',
        ]);

        $data = $request->except(['password', 'password_confirmation', 'image']);

        if ($request->has('password') && $request->password != null) {
            $data['password'] = bcrypt($request->password);
        }

        if ($request->has('image') && $request->image != null) {
            $data['image'] = $this->uploadImage($request->image);
        }

        $affiliate->update($data);

        session()->flash('success', 'تم تعديل المسوق بنجاح' );

        return  myRedirectRoute('dashboard.affiliate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $affiliate = SiteUser::find($id);

        $affiliate->is_affiliate=false;
        $affiliate->affiliate_status=false;
        $affiliate->code=null;
        $affiliate->save();

        session()->flash('success', 'تم حذف المسوق بنجاح' );

        return  myRedirectRoute('dashboard.affiliate.index');
    }
}
