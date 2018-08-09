<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $table='students';

    protected $fillable=['first_name','last_name','other_name',
                        'dob','doj','parent_id','phone','status',
                        'class_id','image','image_path','address',
                        'hometown','gender','city','region','country'];

    public function parent(){
        return $this->belongsTo(Parent::class);
    }

    public function class(){
        return $this->belongsTo(StudentClass::class);
    }

    public function subject_marks(){
        return $this->hasMany(Subject_Marks::class);
    }

    public function result(){
        return $this->hasOne(Result::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function report(){
        return $this->hasOne(Report::class);
    }
}
