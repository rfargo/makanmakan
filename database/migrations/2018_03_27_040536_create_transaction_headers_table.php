<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_headers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->enum('status',['Packing', 'Sending', 'Received']);
            $table->mediumText('deliveryAddress');
            $table->dateTime('dateSent')->nullable();
            $table->dateTime('dateReceived')->nullable();
            $table->dateTime('dateOrdered');
            $table->foreign('user_id')
                  ->references('id')->on('users')
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
        Schema::dropIfExists('transaction_headers');
    }
}
