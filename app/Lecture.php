<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
  protected $fillable = [
    'name',
    'gender',
    'dob',
    'phone',
    'address'
  ];

   public function get_course()
   {
       $this->belongsTo('App\Course' , 'course_id');
   }

}
