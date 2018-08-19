<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('schedules', function (Blueprint $table) {
        $table->increments('id');
        $table->enum('day',['Senin', 'Selasa','Rabu', 'Kamis','Jumat', 'Sabtu', 'Minggu']);
        $table->time('time');
        $table->integer('course_id')->unsigned();
        $table->foreign('course_id','courses')->references('id')->on('courses')->onDelete('cascade');
        $table->integer('class_id')->unsigned();
        $table->foreign('class_id','class')->references('id')->on('class')->onDelete('cascade');
        $table->rememberToken();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
