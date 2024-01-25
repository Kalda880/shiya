<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('table')) {
            Schema::create('payment_requests', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('user_id');
                $table->decimal('amount', 8, 2);
                $table->string('iban');
                $table->string('doc_status')->default('W')->comment('W:Waiting | A:Approved | P:processing | D:Declined');
                $table->string('raison_declined')->nullable();
                $table->timestamps();
            }); 
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('payment_requests');
    }
}
