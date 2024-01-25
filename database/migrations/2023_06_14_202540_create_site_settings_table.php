<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('seqno')->unsigned()->default(1);
            $table->integer('site_setting_group_id')->unsigned()->default(1);
            $table->string('name')->unique();
            $table->text('value')->nullable();
            $table->string('label')->nullable();
            $table->char('is_active')->default('Y');
            $table->string('data_type')->default('string')->comment('string | integer | float | boolean (Y,N)');
            $table->json('opts')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_settings');
    }
}
