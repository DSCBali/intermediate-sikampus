<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
  protected $table = 'lectures';

   public function get_course()
   {
       return $this->belongsTo('App\Course' , 'course_id');
   }

}
