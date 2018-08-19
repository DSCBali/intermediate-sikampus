<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    protected $table = 'class'
    protected $fillable = [
      'name',
      'max_students'
    ];

    public function get_student(){
      $this->hasMany('App\Student', 'class_id');
    }
    public function get_schedule(){
      $this->hasMany('App\Schedule', 'class_id');
    }
}
