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
            $table->string('user_fullname');
            $table->string('room_type');
            $table->string('room_name');
            $table->dateTime('book_startdate');
            $table->dateTime('book_enddate');
            $table->dateTime('book_starttime');
            $table->dateTime('book_endtime');
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
