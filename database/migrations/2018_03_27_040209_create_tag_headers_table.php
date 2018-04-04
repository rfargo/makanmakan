<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_headers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tc_id')->unsigned();
            $table->string('name');
            $table->foreign('tc_id')
                  ->references('id')->on('tag_categories')
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
        Schema::dropIfExists('tag_headers');
    }
}
