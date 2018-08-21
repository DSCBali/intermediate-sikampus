<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
  protected $fillable = [

      'name' ,
      'gender' ,
      'dob' ,
      'phone' ,
      'address',
      'course_id' ,


  ];

   public function get_course()
   {
       return $this->belongsTo('App\Course' , 'course_id');
   }

}
