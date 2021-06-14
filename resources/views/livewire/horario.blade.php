<div>
    <div class="card">
        <div class="card-header">
            <i class="fa icon-calendar"></i>Horario
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            <label>Lunes</label>
                            <input wire:model="seleccion_lunes" type="checkbox">
                        </th>
                        <th>
                            <label>Martes</label>
                            <input wire:model="seleccion_martes" type="checkbox">
                        </th>
                        <th>
                            <label>Miercoles</label>
                            <input wire:model="seleccion_miercoles" type="checkbox">
                        </th>
                        <th>
                            <label>Jueves</label>
                            <input wire:model="seleccion_jueves" type="checkbox">
                        </th>
                        <th>
                            <label>Viernes</label>
                            <input wire:model="seleccion_viernes" type="checkbox">
                        </th>
                        <th>
                            <label>Sabado</label>
                            <input wire:model="seleccion_sabado" type="checkbox">
                        </th>
                        <th>
                            <label>Domingo</label>
                            <input wire:model="seleccion_domingo" type="checkbox">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>

                            @if ($seleccion_lunes)
                                <input wire:model="inicio_lunes" type="time" class="form-control">
                            @else
                                <label>Sin clase<label>
                            @endif
                        </td>
                        <td>
                            @if($seleccion_martes)                            
                                <input wire:model="inicio_martes" type="time" class="form-control">
                            @else
                                <label>Sin clase<label>
                            @endif
                        </td>
                        <td>
                            @if($seleccion_miercoles)                            
                                <input wire:model="inicio_miercoles" type="time" class="form-control">
                            @else
                                <label>Sin clase<label>
                            @endif
                        </td>
                        <td>
                            @if($seleccion_jueves)                            
                                <input wire:model="inicio_jueves" type="time" class="form-control">
                            @else
                                <label>Sin clase<label>
                            @endif
                        </td>
                        <td>
                            @if($seleccion_viernes)                            
                                <input wire:model="inicio_viernes" type="time" class="form-control">
                            @else
                                <label>Sin clase<label>
                            @endif
                        </td>
                        <td>
                            @if($seleccion_sabado)                            
                                <input wire:model="inicio_sabado" type="time" class="form-control">
                            @else
                                <label>Sin clase<label>
                            @endif
                        </td>
                        <td>
                            @if($seleccion_domingo)                            
                                <input wire:model="inicio_viernes" type="time" class="form-control">
                            @else
                            <label>Sin clase<label>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>            
            
        </div>
    </div>
</div>
