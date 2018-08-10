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
    'genre'
  ];
  protected $hidden = ['password','remember_token'];
}
