<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDietaryConsiderationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dietary_consideration_details', function (Blueprint $table) {
            $table->integer('recipe_id')->unsigned();
            $table->integer('dc_id')->unsigned(); 
            $table->primary(['recipe_id', 'dc_id']);
            $table->foreign('recipe_id')
                  ->references('id')->on('recipes')
                  ->onUpdate('cascade');
            $table->foreign('dc_id')
                  ->references('id')->on('dietary_considerations')
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
        Schema::dropIfExists('dietary_consideration_details');
    }
}
