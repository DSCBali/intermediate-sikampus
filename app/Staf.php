<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    protected $fillable = [
      'name',
      'dob',
      'genre',
      'phone'
    ];
}
