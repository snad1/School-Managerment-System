<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table='results';

    protected $fillable=[
        'teacher_id','class_id','student_id','position','marks'
    ];


    public function teachers(){
        return $this->hasMany(Teacher::class);
    }

    public function classes(){
        return $this->hasMany(StudentClass::class);
    }

    public function students(){
        return $this->hasOne(Student::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }


}
