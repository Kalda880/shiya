<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skills;
use App\Models\Designer;
use App\Models\SiteUser;
use App\Models\Payment;
use App\Models\PaymentRequest;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designer = SiteUser::withCount("designs")->withCount("designer_payments")->withSum('designer_payments','amount')->find(auth('site_users')->id());
        //dd($designer);
        $user = auth('site_users')->user();   
         $payment_designer = Payment::whereExists(function ($query)use($user) {
            $query->select(\DB::raw(1))
                  ->from('designs')
                  ->whereColumn('designs.id', 'payments.design_id')
                  ->where('designer_id',$user->id);
        })->selectRaw('sum(amount * designer_percentage )as amount')->first();
        $payment_affiliate = Payment::where('affiliate_id',$user->id)
        ->selectRaw('sum(amount * affiliate_percentage )as amount')->first();
        $payment_designer = $payment_designer?floatval($payment_designer->amount):0.0;
        $payment_affiliate = $payment_affiliate?floatval($payment_affiliate->amount):0.0;
        $payment_received =  floatval(PaymentRequest::where('user_id',$user->id)->where('doc_status','A')->sum('amount'));
        $payment_waiting =  floatval(PaymentRequest::where('user_id',$user->id)->where('doc_status','w')->sum('amount'));
        $payment_processing =  floatval(PaymentRequest::where('user_id',$user->id)->where('doc_status','p')->sum('amount'));
        $payment_available = $payment_designer + $payment_affiliate -  $payment_received - $payment_waiting-$payment_processing;
         return view('designer.index', compact('designer','payment_designer','payment_affiliate','payment_received','payment_waiting','payment_available','payment_processing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('designer.profile.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $skills = Skills::all();

       return view('designer.profile.edit', compact('skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name'  => 'required|min:3',
            'phone' => 'required|min:10|unique:designers,phone,' . auth()->user()->id,
            'email' => 'required|min:10|unique:designers,email,' . auth()->user()->id,
            'skills' => 'required|array|min:1',
            'skills.*' => 'required|integer|exists:skills,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $designer = auth()->user();

        $input = $request->except(['image', 'password', 'cover']);

        if($request->hasFile('image')) {

            $input['image'] =  $this->uploadImage($request->file('image'));
        }

        if($request->hasFile('cover')) {

            $input['cover'] =  $this->uploadImage($request->file('cover'));
        }

        $designer->update($input);

        $designer->skills()->detach();

        $designer->skills()->sync($request->skills);

        return redirect('designer/profile')->with('success', trans('messages.Profile Updated Successfully'));

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
