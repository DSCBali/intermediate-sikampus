<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
  protected $table='staffs';
  public $timestamps = false;
  protected $fillable = ['name','dob','phone','gender','username','password'];
}
