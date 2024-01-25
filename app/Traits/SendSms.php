<?php

namespace App\Traits;
use Illuminate\Support\Facades\Http;

trait SendSms
{
    public function Otp($number, $otp){

        $message = "Your OTP is ".$otp;

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

         if($response['status'] == 'S'){

             return true;

            }else{

             return false;

            }



    }
}


