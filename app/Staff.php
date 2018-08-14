<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    protected $table = 'staffs';
    protected $fillable = [
      'name',
      'username',
      'dob',
      'genre',
      'phone'
    ];
    protected $hidden = ['password','remember_token'];

    public function setPasswordAttribute($val){
      return $this->attributes['password'] = Hash::make($val);
    }

    public function getNameAttribute($val){
      return ucwords($val);
    }
}
