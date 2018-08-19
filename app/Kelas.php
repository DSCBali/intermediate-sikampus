<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['name','max_students'];
    protected $table = 'classes';

    public function students(){
      return $this->hasMany(Student::class,'class_id');
    }

    public function classAvailable(){
      $max_students = $this->attributes['max_students'];
      $student_on_class = $this->students()->count();
      if (($student_on_class - $max_students) === 0) {
        return false;
      }else {
        return true;
      }
    }

    public function courses(){
      return $this->belongsToMany(Course::class, 'schedules', 'class_id', 'course_id')->withPivot('day','time');
    }

    public function currentCourses(){
      return $this->courses()->wherePivot('day',now()->format('Y-m-d'));
    }
}
