<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $fillable = [

        'name',
        'max_students'


    ];

    public function get_student()
    {
        return $this->hasMany('App\Student' , 'class_id');
    }

    public function get_schedule()
    {
        return $this->hasMany('App\Schedule' , 'class_id');
    }
}
