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
            $table->increments('booking_id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('tl_id')->on('diagnosis')->onDelete('cascade')->onUpdate('cascade');
            $table->string('user_name');
            $table->integer('age');
            $table->string('gender');
            $table->string('mobile');
            $table->string('email');
            $table->date('date');
            $table->string('time_slot');
            $table->text('address');
            $table->integer('pin_code');
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
