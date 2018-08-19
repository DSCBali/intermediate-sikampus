<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $table = 'courses';

 public function get_schedule()
 {
       return $this->hasMany('App\Schedule','id');
 }

 public function get_lectures()
 {
       return $this->belongsTo('App\Lecture' , 'lecturer_id');
 }

}
