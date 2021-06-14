<div class="row">
<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- horario -->
<div class="form-group col-sm-12">
    <livewire:horario />
</div>

<!-- Min Participantes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('min_participantes', 'Min Participantes:') !!}
    {!! Form::number('min_participantes', null, ['class' => 'form-control']) !!}
</div>

<!-- Max Participantes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('max_participantes', 'Max Participantes:') !!}
    {!! Form::number('max_participantes', null, ['class' => 'form-control']) !!}
</div>

<!-- Periodo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periodo_id', 'Periodo:') !!}
    {!! Form::select('periodo_id',$periodos, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('materias.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
</div>