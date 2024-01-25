<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Designer\Coupon\CouponRequest;
use App\Models\Coupon;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('designer.coupon.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('designer.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponRequest $request)
    {

        $input = $request->all();

        $input['designer_id'] = auth()->user()->id;

         Coupon::create($input);

         session()->flash('success', 'تم اضافة الكوبون بنجاح');

        return  myRedirectRoute('designer.coupon.index');
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
        $coupon = Coupon::findOrFail($id);

        return view('designer.coupon.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CouponRequest $request, $id)
    {
        $coupon = Coupon::findOrFail($id);

        $input = $request->all();

        $coupon->update($input);

        session()->flash('success', 'تم تعديل الكوبون بنجاح');

        return  myRedirectRoute('designer.coupon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::findOrFail($id);

        $coupon->delete();

        session()->flash('success', 'تم حذف الكوبون بنجاح');

        return  myRedirectRoute('designer.coupon.index');
    }
}
