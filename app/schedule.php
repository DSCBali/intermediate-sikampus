<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
  public $timestamps = false;
  public $rememberToken = false;
  protected $fillable = ['day','time','course_id','class_id'];
}
