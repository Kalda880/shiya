<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsActiveColumnCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('categories', 'is_active')) {
          Schema::table('categories', function (Blueprint $table) {
            $table->boolean('is_active')->nullable()->default(true);
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
        if (Schema::hasColumn('categories', 'is_active')) {
            Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('is_active');
            });
        }
        */
        
    }
}
