<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealCourseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_course_details', function (Blueprint $table) {
            $table->integer('recipe_id')->unsigned();
            $table->integer('mealcourse_id')->unsigned(); 
            $table->primary(['recipe_id', 'mealcourse_id']);
            $table->foreign('recipe_id')
                  ->references('id')->on('recipes')
                  ->onUpdate('cascade');
            $table->foreign('mealcourse_id')
                  ->references('id')->on('meal_courses')
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
        Schema::dropIfExists('meal_course_details');
    }
}
