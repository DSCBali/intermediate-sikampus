<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
  protected $table = 'schedules';


  public function get_course()
  {
         return $this->belongsTo('App\Course' , 'course_id');
  }

  public function get_class()
  {
         return $this->belongsTo('App\kelas','class_id');
  }



}
