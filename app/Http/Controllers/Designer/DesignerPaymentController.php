<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\PaymentRequest;
class DesignerPaymentController extends Controller
{
    public function index()
    {
        $user = auth('site_users')->user();   
         $payment_designer = Payment::whereExists(function ($query)use($user) {
            $query->select(\DB::raw(1))
                  ->from('designs')
                  ->whereColumn('designs.id', 'payments.design_id')
                  ->where('designer_id',$user->id);
        })->selectRaw('sum(amount * designer_percentage )as amount')->first();
        $payment_affiliate = Payment::where('affiliate_id',$user->id)
        ->selectRaw('sum(amount * affiliate_percentage )as amount')->first();
        $payment_designer = $payment_designer?floatval($payment_affiliate->amount):0.0;
        $payment_affiliate = $payment_affiliate?floatval($payment_affiliate->amount):0.0;
        $payment_received =  floatval(PaymentRequest::where('user_id',$user->id)->where('doc_status','A')->sum('amount'));
        $payment_waiting =  floatval(PaymentRequest::where('user_id',$user->id)->where('doc_status','w')->sum('amount'));
        $payment_processing =  floatval(PaymentRequest::where('user_id',$user->id)->where('doc_status','p')->sum('amount'));
        $payment_requests = PaymentRequest::where('user_id',$user->id)->get();
        $payment_available = $payment_designer + $payment_affiliate -  $payment_received - $payment_waiting - $payment_processing;

        return view('designer.payments.index',compact('payment_designer','payment_affiliate','payment_received','payment_waiting','payment_requests','payment_available','payment_processing'));
    }
    public function create()
    {
        $user = auth('site_users')->user();   
        $payment_designer = Payment::whereExists(function ($query)use($user) {
           $query->select(\DB::raw(1))
                 ->from('designs')
                 ->whereColumn('designs.id', 'payments.design_id')
                 ->where('designer_id',$user->id);
       })->selectRaw('sum(amount * designer_percentage )as amount')->first();
       $payment_affiliate = Payment::where('affiliate_id',$user->id)
       ->selectRaw('sum(amount * affiliate_percentage )as amount')->first();
       $payment_designer = $payment_designer?floatval($payment_affiliate->amount):0.0;
       $payment_affiliate = $payment_affiliate?floatval($payment_affiliate->amount):0.0;
       $payment_received =  floatval(PaymentRequest::where('user_id',$user->id)->where('doc_status','A')->sum('amount'));
       $payment_waiting =  floatval(PaymentRequest::where('user_id',$user->id)->where('doc_status','w')->sum('amount'));
       $payment_processing =  floatval(PaymentRequest::where('user_id',$user->id)->where('doc_status','p')->sum('amount'));
       $payment_available = $payment_designer + $payment_affiliate -  $payment_received - $payment_waiting-$payment_processing;
        return view('designer.payments.create',compact('payment_available'));
    }

    public function store()
    {
        $user = auth('site_users')->user();   
         $payment_designer = Payment::whereExists(function ($query)use($user) {
            $query->select(\DB::raw(1))
                  ->from('designs')
                  ->whereColumn('designs.id', 'payments.design_id')
                  ->where('designer_id',$user->id);
        })->selectRaw('sum(amount * designer_percentage )as amount')->first();
        $payment_affiliate = Payment::where('affiliate_id',$user->id)
        ->selectRaw('sum(amount * affiliate_percentage )as amount')->first();
        $payment_designer = $payment_designer?floatval($payment_affiliate->amount):0.0;
        $payment_affiliate = $payment_affiliate?floatval($payment_affiliate->amount):0.0;
        $payment_received =  floatval(PaymentRequest::where('user_id',$user->id)->where('doc_status','A')->sum('amount'));
        $payment_waiting =  floatval(PaymentRequest::where('user_id',$user->id)->where('doc_status','w')->sum('amount'));
        $payment_processing =  floatval(PaymentRequest::where('user_id',$user->id)->where('doc_status','p')->sum('amount'));
        $payment_available = $payment_designer + $payment_affiliate -  $payment_received - $payment_waiting-$payment_processing;
		if($payment_available<100){
			return redirect()->back()->withErrors(['payment_available'=>"يجب ان يكون المبلغ المتاح اكبر او يساوي 100 ر.س"])->withInput();
		}
    //request()->merge(['payment_available'=>$payment_available]);
        $rules =[
            'amount'=>'required|numeric|between:100,'.$payment_available,
            'iban' =>'required',
        ];
        $validator = \Validator(request()->all(),$rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $pay =  new PaymentRequest();
        $pay->amount = request('amount');
        $pay->iban = 'SA'.request('iban');
        $pay->user_id = $user->id;
        $pay->doc_status =  'W';
        $pay->save();
        session()->flash('success','تم إضافة طلب سحب المبغ');
        return redirect()->route('designer.payments');
    }

    public function destroy($id)
    {
        $user = auth('site_users')->user();   

        $payment_requests = PaymentRequest::where('user_id',$user->id)->findOrFail($id);
        if($payment_requests->doc_status != 'W'){
          session()->flash('error','لا يمكنك حذف هذا السطر');
            return redirect()->back();
        }
        $payment_requests->delete();
        session()->flash('success','تم حذف السطر بنجاح');
            return redirect()->back();
    }
}
