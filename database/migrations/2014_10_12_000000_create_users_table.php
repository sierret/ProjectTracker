<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('pic')->default("images/profile_default.jpg");
            $table->string('firstname');
            $table->string('lastname');
            $table->string('degree')->default("-");
            $table->string('contact')->nullable();
            $table->string('UWI_id')->nullable(); //stored as string because of limit on integer size
            $table->string('status')->default("NOT APPROVED");
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
