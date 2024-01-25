<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentsSumAmountColSiteUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('site_users', 'payments_sum_amount')) {
            Schema::table('site_users', function (Blueprint $table) {
                $table->decimal('payments_sum_amount', 8, 2)->nullable()->default(0);
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
        Schema::table('site_users', function (Blueprint $table) {
            //
        });
    }
}
