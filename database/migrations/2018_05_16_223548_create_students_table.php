<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->date('dob');
            $table->date('doj');
            $table->unsignedInteger('parent_id');
            $table->unsignedInteger('phone');
            $table->string('status');
            $table->string('class_id');
            $table->string('image');
            $table->string('image_path');
            $table->string('address');
            $table->string('hometown');
            $table->unsignedInteger('gender');
            $table->string('city');
            $table->string('region');
            $table->string('country');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
