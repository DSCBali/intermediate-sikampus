<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable =
      [

          'nim' ,
          'name' ,
          'dob' ,
          'phone' ,
          'address',
          'gender' ,
          'class_id'

      ];

  public function get_student()
  {
        return $this->belongsTo('App\kelas' , 'class_id');
  }


}
