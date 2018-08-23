<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('parent_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->date('dob');
            $table->string('email');
            $table->unsignedInteger('phone');
            $table->string('occupation');
            $table->string('relationship');
            $table->string('address');
            $table->string('hometown');
            $table->unsignedInteger('gender');
            $table->string('city');
            $table->string('region');
            $table->string('country');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('teacher_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->date('dob');
            $table->date('doj');
            $table->string('martial_status');
            $table->string('email');
            $table->string('status');
            $table->string('image_path');
            $table->string('address');
            $table->string('hometown');
            $table->unsignedInteger('gender');
            $table->string('city');
            $table->string('region');
            $table->string('country');
            $table->unsignedInteger('subject_id');
            $table->string('level')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('subject_teacher_allocation',function (Blueprint $table){
            $table->increments('s_c_a_id');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('teacher_id');
            $table->timestamps();
        });

        Schema::create('classes', function (Blueprint $table) {
            $table->increments('class_id');
            $table->string('class_name');
            $table->string('level');
            $table->string('n_o_s');
            $table->unsignedInteger('teacher_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('subject_id');
            $table->string('subject_name');
            $table->string('level');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('subject_marks', function (Blueprint $table) {
            $table->increments('subject_marks_id');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('class_id');
            $table->double('class_marks',2,2);
            $table->double('exams_marks',3,2);
            $table->double('total_marks',3,2);
            $table->string('grade');
            $table->unsignedInteger('year');
            $table->timestamps();
            $table->softDeletes();

        });

        Schema::create('teacher_subject_marks',function (Blueprint $table){
            $table->increments('t_s_m_id');
            $table->unsignedInteger('subject_marks_id');
            $table->unsignedInteger('teacher_id');
            $table->timestamps();
        });

        Schema::create('marks_student_subject',function (Blueprint $table){
            $table->increments('m_s_s_id');
            $table->unsignedInteger('subject_marks_id');
            $table->unsignedInteger('student_id');
            $table->timestamps();
        });



        Schema::create('results', function (Blueprint $table) {
            $table->increments('result_id');
            //$table->json('marks');
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('class_id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('position');
            $table->timestamps();
            $table->softDeletes();


        });

        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('attendance_id');
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('class_id');
            $table->string('status');
            $table->string('remark');
            $table->date('attendance_date');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('fees', function (Blueprint $table) {
            $table->increments('fee_id');
            $table->unsignedInteger('class_id');
            $table->double('amount',10,2);
            $table->unsignedInteger('year');
            $table->timestamps();
            $table->softDeletes();
             });

        Schema::create('payments', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->unsignedInteger('student_id');
            $table->double('amount',10,2);
            $table->date('date');
            $table->timestamps();
            $table->softDeletes();
        });


        Schema::create('reports', function (Blueprint $table) {
            $table->increments('report_id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('result_id');
            $table->unsignedInteger('year');
            $table->string('teacher_remarks');
            $table->string('head_remarks');
            $table->text('likes_dislikes');
            $table->text('strength_weakness');
            $table->timestamps();
            $table->softDeletes();
            });

        Schema::create('class_subject_allocation',function (Blueprint $table){
            $table->increments('c_s_a_id');
            $table->unsignedInteger('class_id');
            $table->unsignedInteger('subject_id');
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
        Schema::dropIfExists('parents');
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('class');
        Schema::dropIfExists('subject_marks');
        Schema::dropIfExists('subject');
        Schema::dropIfExists('attendances');
        Schema::dropIfExists('fees');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('reports');
        Schema::dropIfExists('results');
    }
}
