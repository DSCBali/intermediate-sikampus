<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $table = 'students';

  public function get_student()
  {
        return $this->belongsTo('App\kelas' , 'class_id');
  }


}
