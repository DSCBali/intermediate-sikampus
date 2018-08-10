<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
      'name',
      'username',
      'dob',
      'genre',
      'phone'
    ];
    protected $hidden = ['password','remember_token'];
}
