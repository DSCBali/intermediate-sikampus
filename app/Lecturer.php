<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $fillable = [
      'name',
      'gender',
      'dob',
      'phone',
      'address'
    ];

    public function matkul(){
      return $this->belongsTo('App\Course', 'course_id');
    }
    public function get_couse(){
      return $this->HasOne('App\Course', 'lecturer_id');
    }
}
