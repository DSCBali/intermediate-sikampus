<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
  public $timestamps = false;
  public $rememberToken = false;
  protected $fillable = ['name','dob','phone','address','gender',];
}
