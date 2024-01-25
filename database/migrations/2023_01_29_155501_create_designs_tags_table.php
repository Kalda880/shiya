<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designs_tags', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('designs_id');
            $table->foreign('designs_id')->references('id')->on('designs')->onDelete('cascade');

           $table->unsignedBigInteger('tags_id');
           $table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade');
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
        Schema::dropIfExists('designs_tags');
    }
}
