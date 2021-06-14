<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- rol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rol', 'Rol:') !!}
    {!! Form::select('rol', ['administrador'=>'Administrador','maestro'=>'Maestro'], null,['class' => 'form-control','placeholde'=>'Asigne un Rol']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>
<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('repassword', 'Re-Password:') !!}
    {!! Form::password('repassword', ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
