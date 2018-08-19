<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('detail_jadwal', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('id_mhs')->unsigned();
        $table->foreign('id_mhs','students')->references('id')->on('students')->onDelete('cascade');
        $table->integer('id_sch')->unsigned();
        $table->foreign('id_sch','schedules')->references('id')->on('schedules')->onDelete('cascade');
        $table->integer('id_class')->unsigned();
        $table->foreign('id_class','class')->references('id')->on('class')->onDelete('cascade');
        $table->integer('id_lecturer')->unsigned();
        $table->foreign('id_lecturer','lecturers')->references('id')->on('lecturers')->onDelete('cascade');
        $table->integer('id_course')->unsigned();
        $table->foreign('id_course','courses')->references('id')->on('courses')->onDelete('cascade');
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
        Schema::dropIfExists('detail_jadwal');
    }
}
