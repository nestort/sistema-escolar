<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Horario extends Component
{
    public $seleccion_lunes,$seleccion_martes,$seleccion_miercoles,$seleccion_jueves,$seleccion_viernes,$seleccion_sabado,$seleccion_domingo;
    public $inicio_lunes,$inicio_martes,$inicio_miercoles,$inicio_jueves,$inicio_viernes,$inicio_sabado,$inicio_domingo;
    public $fin_lunes,$fin_martes,$fin_miercoles,$fin_jueves,$fin_viernes,$fin_sabado,$fin_domingo;
    
    public $json;
    public function render()
    {
        return view('livewire.horario');

    }
}
