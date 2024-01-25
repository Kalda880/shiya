<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('payment_transactions')) {
            Schema::create('payment_transactions', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('user_id')->nullable();
                $table->unsignedBigInteger('affiliate_id')->nullable();
                $table->string('customerEmail');
                $table->string('acquirerMessage')->nullable();
                $table->string('acquirerRRN')->nullable();
                $table->string('cartId')->nullable();
                $table->string('respMessage')->nullable();
                $table->string('respCode')->nullable();
                $table->string('respStatus')->nullable();
                $table->string('signature')->nullable();
                $table->string('token')->nullable();
                $table->string('tranRef')->nullable();
                $table->string('table_type')->nullable();
                $table->unsignedBigInteger('table_id')->nullable();

    
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
        //Schema::dropIfExists('payment_transactions');
    }
}
