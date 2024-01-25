<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFKWithSiteUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('designerskills', function (Blueprint $table) {
            $table->dropForeign(['designer_id']);
            $table->foreign('designer_id')->references('id')->on('site_users')->onDelete('cascade');
        });
        Schema::table('coupons', function (Blueprint $table) {
            $table->dropForeign(['designer_id']);
            $table->foreign('designer_id')->references('id')->on('site_users')->onDelete('cascade');
        });
        Schema::table('customer_designs', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
            $table->foreign('customer_id')->references('id')->on('site_users')->onDelete('cascade');
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
            $table->foreign('customer_id')->references('id')->on('site_users')->onDelete('cascade');
        });
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
            $table->foreign('customer_id')->references('id')->on('site_users')->onDelete('cascade');
        });
        /** affiliate */
        /*Schema::table('customers', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
           // $table->foreign('customer_id')->references('id')->on('site_users')->nullOnDelete('cascade');
        });
        */
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('designerskills', function (Blueprint $table) {
            //
        });
    }
}
