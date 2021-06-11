<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $materia->nombre }}</p>
</div>

<!-- Horario Field -->
<div class="form-group">
    {!! Form::label('horario', 'Horario:') !!}
    <p>{{ $materia->horario }}</p>
</div>

<!-- Min Participantes Field -->
<div class="form-group">
    {!! Form::label('min_participantes', 'Min Participantes:') !!}
    <p>{{ $materia->min_participantes }}</p>
</div>

<!-- Max Participantes Field -->
<div class="form-group">
    {!! Form::label('max_participantes', 'Max Participantes:') !!}
    <p>{{ $materia->max_participantes }}</p>
</div>

<!-- Periodo Id Field -->
<div class="form-group">
    {!! Form::label('periodo_id', 'Periodo Id:') !!}
    <p>{{ $materia->periodo_id }}</p>
</div>

