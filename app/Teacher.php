<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table='teachers';


    protected $fillable=['first_name','last_name','other_name','dob','doj','martial_status',
                        'email','status','image','image_path','address','hometown','gender',
                        'city','region','country','subject_id'];

    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    public function classes(){
        return $this->hasMany(StudentClass::class);
    }

    public function subject_marks(){
        return $this->hasMany(Subject_Marks::class);
    }

    public function results(){
        return $this->hasMany(Result::class);
    }
}
