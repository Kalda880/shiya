<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentRequest;
class PaymentRequestsController extends Controller
{
   public function index()
   {
    $payment_requests = PaymentRequest::paginate();
    $payment_requests->load('user');
    $type = 'all';
    return view('admin.designer.payments.index',compact('type','payment_requests'));
   }

   public function waiting()
   {
    $type = "W";
    $payment_requests = PaymentRequest::where('doc_status',$type)->paginate();
    $payment_requests->load('user');
    return view('admin.designer.payments.index',compact('type','payment_requests'));
   }
   public function approved()
   {
    $type = "A";
    $payment_requests = PaymentRequest::where('doc_status',$type)->paginate();
    $payment_requests->load('user');
    return view('admin.designer.payments.index',compact('type','payment_requests'));
   }
   public function processing()
   {
    $type = "P";
    $payment_requests = PaymentRequest::where('doc_status',$type)->paginate();
    $payment_requests->load('user');
    return view('admin.designer.payments.index',compact('type','payment_requests'));
   }
   public function declined()
   {
    $type = "D";
    $payment_requests = PaymentRequest::where('doc_status',$type)->paginate();
    $payment_requests->load('user');
    return view('admin.designer.payments.index',compact('type','payment_requests'));
   }
   public function doProcessing($id){
    $payment_request = PaymentRequest::find($id);
    //return dd($payment_request);
    if(!$payment_request){
        session()->flash('error','الطلب غير موجود');
        return redirect()->back();
    }
    if($payment_request->doc_status!='W'){
        session()->flash('error','يجب ان يكون الطلب في حالة انتظار لإضافته الى قائمة التحويلات');
        return redirect()->back();
    }
    $payment_request->doc_status = 'P';
    $payment_request->save();
    session()->flash('success','تم اضافة الطلب الى قائمة التحويلات بنجاح');
    return redirect()->back();
   }
   public function undoProcessing($id){
    $payment_request = PaymentRequest::find($id);
    if(!$payment_request){
        session()->flash('error','الطلب غير موجود');
        return redirect()->back();
    }
    if($payment_request->doc_status!='P'){
        session()->flash('error','يجب ان يكون الطلب في قائمة التحويلات');
        return redirect()->back();
    }
    $payment_request->doc_status = 'W';
    $payment_request->save();
    session()->flash('success','تم الغاء الطلب من قائمة التحويلات بنجاح');
    return redirect()->back();
   }

   public function doApproved($id){
    $payment_request = PaymentRequest::find($id);
    if(!$payment_request){
        session()->flash('error','الطلب غير موجود');
        return redirect()->back();
    }
    if($payment_request->doc_status!='P'){
        session()->flash('error','يجب ان يكون الطلب في قائمة التحويلات لتأكيد التحويل');
        return redirect()->back();
    }
    $payment_request->doc_status = 'A';
    $payment_request->save();

    session()->flash('success','تم اضافة الطلب الى قائمة التحويلات المؤكدة بنجاح');
    return redirect()->back();
   }
   public function undoApproved($id){
    $payment_request = PaymentRequest::find($id);
    if(!$payment_request){
        session()->flash('error','الطلب غير موجود');
        return redirect()->back();
    }
    if($payment_request->doc_status!='A'){
        session()->flash('error','يجب ان يكون الطلب في قائمة التحويلات المؤكدة');
        return redirect()->back();
    }
    $payment_request->doc_status = 'P';
    $payment_request->save();

    session()->flash('success','تم الغاء الطلب من قائمة المؤكدة بنجاح');
    return redirect()->back();
   }
   public function doDeclined($id){
    $payment_request = PaymentRequest::find($id);
    if(!$payment_request){
        session()->flash('error','الطلب غير موجود');
        return redirect()->back();
    }
    if( !in_array($payment_request->doc_status,['W'])){
        session()->flash('error','يجب ان يكون الطلب في قائمة الانتظار');
        return redirect()->back();
    }
    $rules =[
        'cause'=>'required',
    ];
    $validator = \Validator(request()->all(),$rules);
    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $payment_request->doc_status = 'D';
    $payment_request->raison_declined = request('cause');

    $payment_request->save();

    session()->flash('success','تم رفض الطلب بنجاح');
    return redirect()->back();
   }
   public function undoDeclined($id){
    $payment_request = PaymentRequest::find($id);
    if(!$payment_request){
        session()->flash('error','الطلب غير موجود');
        return redirect()->back();
    }
    if($payment_request->doc_status!='D'){
        session()->flash('error','يجب ان يكون الطلب مرفوض من قبل');
        return redirect()->back();
    }
    $payment_request->doc_status = 'W';
    $payment_request->raison_declined = null;

    $payment_request->save();

    session()->flash('success','تم الغاء الطلب من قائمة المؤكدة بنجاح');
    return redirect()->back();
   }
}

