<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
      'name',
      'lecturer_id'
    ];

    public function course_schedule(){
      return $this->hasMany('App\Schedule', 'course_id');
    }
    public function get_lecturer(){
      return $this->hasOne('App\Lecturer', 'course_id');
    }
    public function course_lecture(){
      return $this->belongsTo('App\Lecturer', 'lecturer_id');
    }
}
