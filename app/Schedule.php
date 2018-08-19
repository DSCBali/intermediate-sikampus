<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
      'day',
      'time'
    ];

    public function class_schedule(){
      $this->belongsTo('App\Kelas', 'class_id');
    }
    public function to_course(){
      $this->belongsTo('App\Course', 'course_id');
    }
}
