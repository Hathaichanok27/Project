<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mybookings', function (Blueprint $table) {
            $table->id();
            $table->string('room_type');
            $table->string('room_floor');
            $table->string('room_name')->nullable();
            $table->dateTime('book_createtime')->useCurrent();
            $table->dateTime('book_starttime')->nullable();
            $table->dateTime('book_endtime')->nullable();
            $table->string('username');
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
        Schema::dropIfExists('mybookings');
    }
}
