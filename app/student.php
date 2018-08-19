<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
  public $timestamps = false;
  public $rememberToken = false;
  protected $fillable = ['nim','name','dob','phone','address','gender','sch_id'];
}
