<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentParent extends Model
{
    protected $table='parents';

    protected $fillable=['first_name','last_name','other_name','dob',
                        'email','phone','status','occupation','relationship'
                        ,'address','hometown','gender','city','region','country'];

    public function students(){
        $this->hasMany(Student::class);
    }

}
