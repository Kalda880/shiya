<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCatOrderColumnCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('categories', 'cat_order')) {
            Schema::table('categories', function (Blueprint $table) {
              $table->unsignedBigInteger('cat_order')->default(1);
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
        /*
        Schema::table('categories', function (Blueprint $table) {
            //
        });
        */
    }
}
