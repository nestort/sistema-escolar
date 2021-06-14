<!-- Nombres Field -->
<div class="form-group">
    {!! Form::label('nombres', 'Nombres:') !!}
    <p>{{ $alumno->nombres }}</p>
</div>

<!-- Apepaterno Field -->
<div class="form-group">
    {!! Form::label('apepaterno', 'Apepaterno:') !!}
    <p>{{ $alumno->apepaterno }}</p>
</div>

<!-- Apematerno Field -->
<div class="form-group">
    {!! Form::label('apematerno', 'Apematerno:') !!}
    <p>{{ $alumno->apematerno }}</p>
</div>

<!-- Carrera Field -->
<div class="form-group">
    {!! Form::label('carrera', 'Carrera:') !!}
    <p>{{ $alumno->carrera }}</p>
</div>

<!-- Fecha Nac Field -->
<div class="form-group">
    {!! Form::label('fecha_nac', 'Fecha Nac:') !!}
    <p>{{ $alumno->fecha_nac }}</p>
</div>

<!-- User email -->
<div class="form-group">
    {!! Form::label('user', 'Correo:') !!}
    <p>{{ $alumno->user->email }}</p>
</div>

<!-- User name -->
<div class="form-group">
    {!! Form::label('user', 'Nombre de usuario:') !!}
    <p>{{ $alumno->user->name }}</p>
</div>

