<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Clickpaysa\Laravel_package\Services\IpnRequest;

class PaymentWebookController extends Controller
{
    public function updateCartByIPN(IpnRequest $request)
    {
        $cartId= $requestData->getCartId();
        $status= $requestData->getStatus(); 
        \Log::info("inp Request: $cartId $status");
    }
}
