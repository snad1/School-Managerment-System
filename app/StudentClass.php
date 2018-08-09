<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $table='classes';

    protected $fillable=['class_name','level','n_o_s','teacher_id'];

    public function teachers(){
        return $this->hasMany(Teachers::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}
