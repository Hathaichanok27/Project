<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manageadmins', function (Blueprint $table) {
            $table->id();
            $table->string('admin_username');
            $table->string('admin_fullname');
            $table->string('admin_email')->unique();
            $table->string('admin_telnum')->nullable();
            $table->boolean('is_admin');
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
        Schema::dropIfExists('manageadmins');
    }
}
