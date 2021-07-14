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
            $table->increments('id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->date('birthdate');
            $table->integer('age');
            $table->integer('housenumber');
            $table->string('street');
            $table->string('barangay');
            $table->string('city');
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->bigInteger('zipcode')->nullable();
            $table->string('email');
            $table->bigInteger('contactnumber');
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
