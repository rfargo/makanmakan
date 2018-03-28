<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->integer('user_id')->unsigned(); // the one who leave a review
            $table->longText('content');
            $table->integer('rating'); 
            $table->dateTime('datePosted');
            $table->boolean('isDeleted');
            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onUpdate('cascade');
            $table->foreign('article_id')
                  ->references('id')->on('articles')
                  ->onDelete('cascade')
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
        Schema::dropIfExists('reviews');
    }
}
