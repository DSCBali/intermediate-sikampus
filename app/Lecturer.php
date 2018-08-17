<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
  protected $fillable = ['name','genre','dob','phone','address','course_id'];

  public function course(){
    return $this->hasOne(Course::class);
  }
}
