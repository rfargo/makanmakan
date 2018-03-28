<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportedReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reported_reviews', function (Blueprint $table) {
            $table->integer('review_id')->unsigned();
            $table->integer('user_id')->unsigned(); // the one who report a review
            $table->longText('reason');
            $table->dateTime('dateReported');
            $table->primary(['review_id', 'user_id']);
            $table->foreign('review_id')
                  ->references('id')->on('reviews')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('user_id')
                  ->references('id')->on('users')
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
        Schema::dropIfExists('reported_reviews');
    }
}
