<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    protected $table='fees';

    protected $fillable=[
        'class_id','amount','year'
    ];

    public function class(){
        return $this->hasOne(StudentClass::class);
    }
}
