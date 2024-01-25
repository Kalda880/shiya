<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGoogleIdColToSiteUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('site_users', 'google_id')) {
            Schema::table('site_users', function (Blueprint $table) {
                $table->string('google_id')->nullable();
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
