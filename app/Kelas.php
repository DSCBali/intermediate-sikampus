<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['name','max_students'];
    protected $table = 'classes';

    public function students(){
      return $this->hasMany(Student::class);
    }
}
