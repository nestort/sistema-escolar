<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();

            $table->text("nombres");
            $table->text("apepaterno");
            $table->text("apematerno");
            $table->text("carrera");
            $table->date("fecha_nac");
            $table->foreignId("user_id");
            $table->timestamps();

             // relacion alumno - usuario            
             $table->foreign('user_id')->references('id')->on('users')
             ->onUpdate('cascade')->onDelete('cascade');
             

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
