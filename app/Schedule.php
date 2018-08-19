<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Schedule extends Model
{
    protected $fillable = ['day','time','course_id','class_id'];

    public function course(){
      return $this->belongsTo(Course::class);
    }

    public function class(){
      return $this->belongsTo(Kelas::class);
    }

    public function getDayAttribute($val){
      $date = Carbon::createFromFormat('Y-m-d', $val)->format('l');
      return $date;
    }

    public function plainDate(){
      return $this->attributes['day'];
    }
}
