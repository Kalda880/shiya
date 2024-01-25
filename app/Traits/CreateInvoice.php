<?php

namespace App\Traits;
use PDF;
trait CreateInvoice
{
    public function CreateInvoice($payment, $customer, $design){

        $file = 'files/'.$payment->id.'.pdf';
        
        return 'heelo';

        // $pdf = PDF::loadView('admin.invoice', [

        //     'customer' => $customer,
        //     'order'    => $design,

        // ])->save($file);


        // $payment->update([
        //     'invoice' =>  asset($file),
        // ]);

        return asset($file);
    }
}


