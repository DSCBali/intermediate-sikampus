<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
  protected $table = 'schedules';

  public function get_course()
  {
         $this->belongsTo('App\Course' , 'course_id');
  }

  public function get_class()
  {
         $this->belongsTo('App\kelas','class_id');
  }



}
