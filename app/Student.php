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
        return $this->hasOne(Parent::class);
    }
}
