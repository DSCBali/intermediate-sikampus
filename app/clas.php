<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clas extends Model
{
    protected $table='class';
    public $timestamps = false;
    protected $fillable = ['name','max_students'];
}
