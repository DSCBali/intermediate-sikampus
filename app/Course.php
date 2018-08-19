<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name','lecturer_id'];

    public function lecturer(){
      return $this->belongsTo(Lecturer::class);
    }
}
