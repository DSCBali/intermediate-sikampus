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
      'gender',
      'class_id'
    ];

    public function get_class(){
      return $this->belongsTo('App\Kelas', 'class_id');
    }
}
