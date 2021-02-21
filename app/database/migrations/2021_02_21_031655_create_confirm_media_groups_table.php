<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmMediaGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmmediagroups', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('user_fullname');
            $table->string('user_telnum')->nullable();
            $table->string('user_email')->unique()->nullable();
            $table->string('room_type');
            $table->string('room_floor');
            $table->string('room_name')->nullable();
            $table->dateTime('book_createtime')->useCurrent();
            $table->dateTime('book_starttime')->nullable();
            $table->dateTime('book_endtime')->nullable();
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
        Schema::dropIfExists('confirmmediagroups');
    }
}
