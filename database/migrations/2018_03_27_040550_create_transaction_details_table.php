<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->integer('transaction_id')->unsigned();
            $table->integer('recipe_id')->unsigned();
            $table->decimal('price',10,2);
            $table->integer('quantity');

            $table->primary(['transaction_id', 'recipe_id']);
            $table->foreign('recipe_id')
                  ->references('id')->on('recipes')
                  ->onUpdate('cascade');
            $table->foreign('transaction_id')
                  ->references('id')->on('transaction_headers')
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
        Schema::dropIfExists('transaction_details');
    }
}
