<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('students', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('nim');
        $table->string('name');
        $table->date('dob');
        $table->string('phone');
        $table->text('address');
        $table->enum('gender',['Laki-laki', 'Perempuan']);
        $table->integer('sch_id')->unsigned();
        $table->foreign('sch_id','schedules')->references('id')->on('schedules');
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
        Schema::dropIfExists('students');
    }
}
