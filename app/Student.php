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
    return $this->belongsTo(Kelas::class);
  }

  public function plainGenre(){
    return $this->attributes['genre'];
  }
}
