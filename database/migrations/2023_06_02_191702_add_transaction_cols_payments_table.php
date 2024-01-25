<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTransactionColsPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //columns to save transaction->payment_info
        if (!Schema::hasColumn('payments', 'tran_payment_method')) {
            Schema::table('payments', function (Blueprint $table) {
                $table->string('tran_payment_method')->nullable();
                $table->string('tran_card_type')->nullable();
                $table->string('tran_card_scheme')->nullable();
                $table->string('tran_payment_description')->nullable();
                $table->string('tran_expiry_month')->nullable();
                $table->string('tran_expiry_year')->nullable();
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
        //
    }
}
