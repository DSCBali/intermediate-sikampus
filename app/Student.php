<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = [
    'nim',
    'name',
    'dob',
    'phone',
    'address',
    'genre',
    'class_id'
  ];
  protected $hidden = ['password','remember_token'];

  public function studentClass(){
    return $this->belongsTo(Class::class);
  }
}
