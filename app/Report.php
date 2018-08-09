<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table='reports';

    protected $fillable=['student_id','result_id','year','teacher_remarks',
                        'head_remarks','likes_dislikes','strength_weakness'];

    public function student(){
        return $this->belongsTo(Student::class);
    }


}
