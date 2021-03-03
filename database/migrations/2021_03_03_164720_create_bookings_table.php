<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->integer('category_id');
            $table->string('from_location');
            $table->string('to_location');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('country');
            $table->string('note')->nullable();
            $table->tinyInteger('payment_status');
            $table->float('order_total');
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
        Schema::dropIfExists('bookings');
    }
}
