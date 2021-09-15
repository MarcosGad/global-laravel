<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('salary');
            $table->string('level');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('birth_day');
            $table->integer('birth_month');
            $table->integer('birth_year');
            $table->string('gender');
            $table->string('nationality');
            $table->string('marital_status');
            $table->string('military_status');
            $table->string('driving_license');
            $table->string('country');
            $table->string('city');
            $table->string('area');
            $table->string('mobile_number');
            $table->integer('user_id');
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
        Schema::dropIfExists('data_users');
    }
}
