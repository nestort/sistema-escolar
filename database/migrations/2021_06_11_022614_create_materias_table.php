<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->date('horario');
            $table->integer('min_participantes');
            $table->integer('max_participantes');
            $table->foreignId('periodo_id');
            $table->timestamps();
            
            // relacion materia - periodo                      
           $table->foreign('periodo_id')->references('id')->on('periodos')
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
        Schema::dropIfExists('materias');
    }
}
