<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $usuario->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Correo:') !!}
    <p>{{ $usuario->email }}</p>
</div>

<!-- Rol Field -->
<div class="form-group">
    {!! Form::label('rol', 'Rol:') !!}
    <p>{{ $usuario->rol }}</p>
</div>

