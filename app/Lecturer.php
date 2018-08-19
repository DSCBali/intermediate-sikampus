<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
  protected $fillable = ['name','genre','dob','phone','address'];

  public function course(){
    return $this->hasOne(Course::class);
  }

  public function getGenreAttribute($val){
    if($val == 1)
      return 'Laki - laki';
    else
      return 'Perempuan';
  }

  public function plainGenre(){
    return $this->attributes['genre'];
  }
}
