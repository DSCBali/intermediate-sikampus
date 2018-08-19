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
      'phone',
      'password'
    ];
    protected $hidden = ['password','remember_token'];

    public function setPasswordAttribute($val){
      return $this->attributes['password'] = Hash::make($val);
    }

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

    public function getNameAttribute($val){
      return ucwords($val);
    }
}
