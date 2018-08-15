<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $fillable = [
   'name',
   'lecturer_id'
 ];

 public function get_schedule()
 {
       $this->hasMany('App\Schedule','id');
 }

 public function get_lectures()
 {
       $this->belongsTo('App\Lecture' , 'lecturer_id');
 }

}
