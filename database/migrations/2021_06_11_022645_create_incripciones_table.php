<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incripciones', function (Blueprint $table) {
            $table->foreignId('id')->unsigned();

            $table->foreignId('materia_id');
            $table->foreignId('alumno_id');
            $table->enum("status",['solicitado','aceptado','rechazado']);  // status de solicitud inscripcion    
            $table->timestamps();

             // relacion incripcion - materia
           $table->foreign('materia_id')->references('id')->on('materias')
           ->onUpdate('cascade')->onDelete('cascade');

           // relacion incripcion - alumno
           $table->foreign('alumno_id')->references('id')->on('alumnos')
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
        Schema::dropIfExists('incripciones');
    }
}
