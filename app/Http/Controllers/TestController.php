<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Clickpaysa\Laravel_package\Facades\paypage;
use App\Models\SiteUser;
class TestController extends Controller
{
    public function queryTest(){
       $pye= \App\Models\Payment::whereExists(function ($query) {
            $query->select(\DB::raw(1))
                  ->from('designs')
                  ->whereColumn('designs.id', 'payments.design_id')
                  ->where('designer_id',32);
        })->selectRaw('sum(amount * designer_percentage )as amount')->first();
        return dd($pye);
    }
    public function session()  {
        //if(session()->missing('code-affiliate'))
        //session()->put('code', '45888');
        //session()->save();
        //return dump(session()->all());
    }
    public function login(){
		//$user = SiteUser::find(44);
		//auth()->guard('site_users')->login($user);
	}
    public function voidPayment(){
        if(env('APP_URL')!='https://shyadsn.test') return 'ok';
        $ref= "TST2314600023512";
        $void = Paypage::void($ref,"10",'1500','void description');
        return dd($void);
    }
    public function tranRef($ref)
    {
        if(env('APP_URL')!='https://shyadsn.test') return 'ok';
        $tranRef=$ref??"TST2314600023499";
        $transaction = Paypage::queryTransaction($tranRef);
        return dd($transaction,$transaction->payment_info->expiryMonth);
    }
    public function sendSMS()
    {
        //if(env('APP_URL')!='https://shyadsn.test') return 'ok';
        $otp="12053";
        $number = "+966531333006";
        //$number = "+213660824022";
        $message = "Test Message from Rabie (Shyadsn)";

        $response = Http::get('http://REST.GATEWAY.SA/api/SendSMS', [

            'api_id'       => 'API40284241298',
            'api_password' => 'eMQZnf3NdG',
            'sms_type'     => 'T',
            'encoding'     => 'T',
            'sender_id'    => 'arkhas',
            'phonenumber'  => $number,
            'textmessage'  => $message,
            'uid'          => 'xyz',

        ]);


         $response =  $response->json();
          return dd($response);
         if($response['status'] == 'S'){

             return true;

            }else{

             return false;

            }
    }
}
