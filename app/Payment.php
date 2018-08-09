<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table='payments';

    protected $fillable=[
        'student_id','amount','date'
    ];

    public function students(){
        return $this->belongsTo(Student::class);
    }
}
