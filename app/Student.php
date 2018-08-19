<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;

class Student extends Authenticatable
{
  protected $fillable = [
    'nim',
    'name',
    'dob',
    'phone',
    'address',
    'genre',
    'class_id',
    'password',
    'class_id'
  ];
  protected $hidden = ['password','remember_token'];

  public function getGenreAttribute($val){
    if($val == 1)
      return 'Laki - laki';
    else
      return 'Perempuan';
  }

  public function studentClass(){
    return $this->belongsTo('App\Kelas', 'class_id');
  }

  public function plainGenre(){
    return $this->attributes['genre'];
  }

  public function setPasswordAttribute($val){
    return $this->attributes['password'] = Hash::make($val);
  }
}
