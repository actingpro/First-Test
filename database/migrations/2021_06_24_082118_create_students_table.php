<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->integer('id_number');
            $table->integer('role_id');
            $table->string('status');
            $table->string('info')->nulable();
            $table->string('image')->nulable();
            $table->string('book1')->nulable();
            $table->string('book2')->nulable();
            $table->string('book3')->nulable();
            $table->string('book4')->nulable();
            $table->string('book5')->nulable();
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
