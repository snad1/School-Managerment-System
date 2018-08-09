<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject_Marks extends Model
{
    protected $table='subject_marks';

    protected $fillable=['subject_id','teacher_id','class_id'
                        ,'class_marks','exams_marks','total_marks',
                        'grade','year'];


    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function teachers(){
        return $this->hasMany(Teacher::class);
    }

    public function classes(){
        return $this->hasMany(StudentClass::class);
    }
}
