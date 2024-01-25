<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design_elements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('designs_id')->constrained('designs')->onDelete('cascade');

            $table->string('element')->nullable();
            $table->json('element_data')->nullable();

            $table->string('image')->nullable();
            $table->string('type')->nullable();

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
        Schema::dropIfExists('design_elements');
    }
}
