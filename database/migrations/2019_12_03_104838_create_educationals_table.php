<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educationals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('educational_level');
            $table->string('degree_details');
            $table->string('university_institution');
            $table->string('your_degree');
            $table->string('grade');
            $table->string('skills');
            $table->string('featrued');
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
        Schema::dropIfExists('educationals');
    }
}
