<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservemeetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservemeets', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('room_type');
            $table->string('room_floor');
            $table->string('room_name');
            $table->dateTime('time_start');
            $table->dateTime('time_end');
            $table->string('book_status');
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
        Schema::dropIfExists('reservemeets');
    }
}
