<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPercentageColsPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('payments', 'designer_percentage')) {
            Schema::table('payments', function (Blueprint $table) {
                    $table->decimal('designer_percentage', 5, 2)->default(0.6);
            });  
        }
        if (!Schema::hasColumn('payments', 'affiliate_percentage')) {
            Schema::table('payments', function (Blueprint $table) {
                $table->decimal('affiliate_percentage', 5, 2)->default(0.1);
            
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
        Schema::table('payments', function (Blueprint $table) {
            //
        });
    }
}
