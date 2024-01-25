<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
class SmsCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $otp="12053";
        $number = "+213660824022";
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
