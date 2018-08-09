<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table='attendances';

    protected $fillable=['teacher_id','class_id','status','remark','attendance_date'];

    public function teachers(){
        return $this->hasOne(Teacher::class);
    }

    public function class(){
        return $this->hasOne(StudentClass::class);
    }
}
