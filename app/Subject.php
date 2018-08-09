<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table='subjects';

    protected $fillable=['subject_name'];

    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
}
