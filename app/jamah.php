<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jamah extends Model
{
      protected $table='detail_jadwal';
      public $timestamps = false;
      public $rememberToken = false;
      protected $fillable = ['id_mhs','id_sch','id_class','id_lecturer','id_course'];

}
