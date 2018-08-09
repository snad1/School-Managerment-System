<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Relationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->foreign('parent_id')
                ->references('parent_id')->on('parents')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('teachers', function (Blueprint $table) {
            $table->foreign('subject_id')
                ->references('subject_id')
                ->on('subjects')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('subject_teacher_allocation', function (Blueprint $table) {
            $table->foreign('subject_id')
                ->references('subject_id')
                ->on('subjects')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('teacher_id')
                ->references('teacher_id')
                ->on('teachers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('classes', function (Blueprint $table) {
            $table->foreign('teacher_id')
                ->references('teacher_id')->on('teachers')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('student_id')
                ->references('student_id')->on('students')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('subject_marks', function (Blueprint $table) {

            $table->foreign('subject_id')->references('subject_id')
                ->on('subjects')->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('student_id')->references('student_id')
                ->on('students')->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('teacher_id')->references('teacher_id')
                ->on('teachers')->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('class_id')->references('class_id')
                ->on('classes')->onDelete('cascade')
                ->onUpdate('cascade');

        });

        Schema::table('teacher_subject_marks', function (Blueprint $table) {
            $table->foreign('subject_marks_id')
                ->references('subject_marks_id')
                ->on('subject_marks')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('teacher_id')
                ->references('teacher_id')
                ->on('teachers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('marks_student_subject', function (Blueprint $table) {
            $table->foreign('subject_marks_id')
                ->references('subject_marks_id')
                ->on('subject_marks')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('student_id')
                ->references('student_id')
                ->on('students')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });

        Schema::table('results', function (Blueprint $table) {
            $table->foreign('teacher_id')
                ->references('teacher_id')
                ->on('teachers')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('class_id')
                ->references('class_id')
                ->on('classes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('student_id')
                ->references('student_id')
                ->on('students')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });

        Schema::table('attendances', function (Blueprint $table) {
            $table->foreign('teacher_id')->references('teacher_id')
                ->on('teachers')->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('class_id')->references('class_id')
                ->on('classes')->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('student_id')->references('student_id')
                ->on('students')->onDelete('cascade')
                ->onUpdate('cascade');

        });

        Schema::table('fees', function (Blueprint $table) {
            $table->foreign('class_id')->references('class_id')
                ->on('classes')->onDelete('cascade')
                ->onUpdate('cascade');


        });

        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('student_id')->references('student_id')
                ->on('students')->onDelete('cascade')
                ->onUpdate('cascade');

        });

        Schema::table('reports', function (Blueprint $table) {
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('result_id')->references('result_id')->on('results')->onDelete('cascade')->onUpdate('cascade');


        });

        Schema::table('class_subject_allocation', function (Blueprint $table) {

            $table->foreign('class_id')
                ->references('class_id')
                ->on('classes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('subject_id')
                ->references('subject_id')
                ->on('subjects')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
