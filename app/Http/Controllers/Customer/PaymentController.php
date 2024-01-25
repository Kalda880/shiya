<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\CustomerDesign;
use App\Models\Design;
use App\Models\Payment;
use App\Models\Affiliate;
use App\Models\Customer;
use App\Models\PaymentTransaction;
use App\Models\SiteUser;
use App\Traits\CreateInvoice;
use Illuminate\Http\Request;
use Clickpaysa\Laravel_package\Facades\paypage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class PaymentController extends Controller
{
    use CreateInvoice;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $payments = Payment::where('customer_id', auth('site_users')->user()->id)->latest()->get();

        return view('customer.payment', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        //$affCode = $request->get('code', NULL);
       // return dd(setting_value('ALL_PRODUCT_FREE'));
        $design = Design::findOrFail($request->design);
        $affCode = null;
        if(session()->has("affiliate.".$design->id))
        $affCode = session()->get("affiliate.".$design->id,null)[0];
        else{
            if(session()->has("affiliate.code"))
            $affCode = session()->get("affiliate.code")[0];
        }
       
        $exists = CustomerDesign::where('design_id', $design->id)->where('customer_id', auth('site_users')->user()->id)->first();
        
        //dd($request);

        if ($exists) {
            return myRedirectRoute('customer.')->with('error', trans("messages.You already bought this design"));
        }

        $id = Crypt::encrypt($design->id);
        $customer = auth('site_users')->user();

        if($design->price == 0 || setting_value('ALL_PRODUCT_FREE')=='Y'){

            CustomerDesign::create([
                'design_id'   => $design->id,
                'customer_id' => $customer->id,
            ]);

            //if(setting_value('ALL_PRODUCT_FREE')=='Y'){
            $affiliateId = $affCode ? SiteUser::where("code", $affCode)->first()->id : NULL;

           //}
            $payment_data =[
                'customer_id' => $customer->id,
                'design_id'   => $design->id,
                'amount'      => 0,
                'status'      => 'free',
                'number'      => invoiceNumber(),
                //"tran_ref"     =>$tranRef,
                //"resp_status"    =>$respStatus,
                "designer_percentage" => 0.6,
                "affiliate_percentage" => $affiliateId?0.1:0.0,
                'affiliate_id' => $affiliateId
              ];
              $payment = Payment::create($payment_data);
              return myRedirectRoute('index')->with('success', 'تم شراء بنجاح');
        }

        $isIFrame  = true;
        $pay= Paypage::sendPaymentCode('all')
         ->sendTransaction('sale')
         ->sendCart(10,$design->price, "design :".$design->title)
         ->sendHideShipping(true)
         ->sendCustomerDetails($customer->name, $customer->email, $customer->phone,"street test", 'Riyadh', 'Riyadh', 'SA', '1234','10.0.0.10')
         ->sendURLs(myRoute('paymenteturn',['id'=>$id,'customer'=>$customer->id,'code'=> $affCode ]) ,  env('CALLBACK_URL') )
         ->sendLanguage(app()->getLocale())
         ->sendFramed($isIFrame,"top")// you should modify in vendor sendFramed($on, $redirect_target = 'iframe')
         //->sendUserDefined(["framed_return_top"=>true/*,"framed_return_parent"=>false*/])
         ->create_pay_page();

         if($isIFrame){
            //return dd($pay);
            $urlPayment = $pay;
         return view('customer.payment-form',compact('urlPayment'));
         }else
        return $pay;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function return($id, $customer, $code = NULL)
    {
        // get the payment status
        $id     =  Crypt::decrypt($id);

        $design = Design::findOrFail($id);
        //return dd($design);
        $designer = SiteUser::find($design->designer_id);

        $customer = SiteUser::find($customer);
        $affiliateId = $code ? SiteUser::where("code", $code)->first()->id : NULL;

        if(!auth('site_users')->check() || $customer->id != auth('site_users')->id())
        auth('site_users')->login($customer);
        $tranRef= request('tranRef');
        $respStatus= request('respStatus');//A:Authorised | E:error | D:Declined | V:Voided | C:cancelled | X:Authorisation expired | P :Pending (for refunds) | H : Hold (Authorised but on hold for further anti-fraud review)
        
        if(!in_array($respStatus,['A','P','H','V'])){
            //return dd($tranRef,request()->all());
            return  myRedirectRoute('template')->with('error',request('respMessage'));
        }
        $data = request()->all();
        $data['user_id'] = $customer->id;
        $data['affiliate_id'] = $affiliateId;
        $data['table_id'] = $design->id;
        $data['table_type'] = $design->getTable();
        PaymentTransaction::create($data);
        if(in_array($respStatus,['P','H','V'])){
        // for pending ,voiding and holding
        //return dd($tranRef,request()->all());
        if($code)
        request()->merge(['code'=>$code]);
        return  myRedirectRoute('template')->with('error',request('respMessage'));
        }
    //return dd($tranRef,request()->all());
  
  $payment_data =[
    'customer_id' => $customer->id,
    'design_id'   => $design->id,
    'amount'      => $design->price,
    'status'      => 'paid',
    'number'      => invoiceNumber(),
    "tran_ref"     =>$tranRef,
    "resp_status"    =>$respStatus,
    "designer_percentage" => 0.6,
    "affiliate_percentage" => $affiliateId?0.1:0.0,
    'affiliate_id' => $affiliateId
  ];
    try {
        $transaction = Paypage::queryTransaction($tranRef);
        $payment_data['tran_payment_method'] = $transaction->payment_info->payment_method;
        $payment_data['tran_card_type'] = $transaction->payment_info->card_type;
        $payment_data['tran_card_scheme'] = $transaction->payment_info->card_scheme;
        $payment_data['tran_payment_description'] = $transaction->payment_info->payment_description;
        $payment_data['tran_expiry_month'] = $transaction->payment_info->expiryMonth;
        $payment_data['tran_expiry_year'] = $transaction->payment_info->expiryYear;

    } catch (\Throwable $th) {
        //throw $th;
    }
        CustomerDesign::create([
            'design_id'   => $design->id,
            'customer_id' =>  $customer->id,
        ]);

        $payment = Payment::create($payment_data);
        if($designer){
        $sum = Payment::whereExists(function ($query)use($design) {
            $query->select(\DB::raw(1))
                  ->from('designs')
                  ->whereColumn('designs.id', 'payments.design_id')
                  ->where('designer_id',$design->designer_id);
        })->selectRaw('sum(amount * designer_percentage )as amount')->first();
        $designer->payments_sum_amount = $sum ? $sum->amount:0;
        $designer->save();
    }

        $invoice = $this->CreateInvoice($payment, $customer, $design);


        return myRedirectRoute('index')->with('success', 'تم الدفع بنجاح');

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
