<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuisineDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuisine_details', function (Blueprint $table) {
            $table->integer('recipe_id')->unsigned();
            $table->integer('cuisine_id')->unsigned(); 
            $table->primary(['recipe_id', 'cuisine_id']);
            $table->foreign('recipe_id')
                  ->references('id')->on('recipes')
                  ->onUpdate('cascade');
            $table->foreign('cuisine_id')
                  ->references('id')->on('cuisines')
                  ->onUpdate('cascade');        
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuisine_details');
    }
}
