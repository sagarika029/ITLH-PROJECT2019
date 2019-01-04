<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('user_id');
            $table->integer('number');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->integer('pincode');
            $table->string('name');
            $table->integer('quantity');
            $table->string('price');
            $table->string('total_amount');
            $table->boolean('status');
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
         Schema::dropIfExists('order');
    }
}
