<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('old_id')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('image')->nullable();
            $table->string('cover')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('code')->unique()->nullable();
            $table->longText('about')->nullable();
            $table->string('country')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->boolean('designer_status')->default(0);
            $table->boolean('customer_status')->default(1);
            $table->boolean('affiliate_status')->default(0);
            $table->boolean('is_designer')->default(0);
            $table->boolean('is_customer')->default(0);
            $table->boolean('is_affiliate')->default(0);
            $table->unsignedBigInteger('affiliate_id')->nullable();
            $table->string('role')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('site_users');
    }
}
