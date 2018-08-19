<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
  public $timestamps = false;
  public $rememberToken = false;
  protected $fillable = ['name','sks','lecturer_id'];
}
