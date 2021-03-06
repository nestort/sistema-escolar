<!-- Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres', 'Nombre(s):') !!}
    {!! Form::text('nombres', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Apepaterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apepaterno', 'Apellido Paterno:') !!}
    {!! Form::text('apepaterno', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Apematerno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apematerno', 'Apellido Materno:') !!}
    {!! Form::text('apematerno', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Carrera Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carrera', 'Carrera:') !!}
    {!! Form::text('carrera', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Fecha Nac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_nac', 'Fecha de nacimiento:') !!}
    {!! Form::text('fecha_nac', null, ['class' => 'form-control', 'id' => 'fecha_nac']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha_nac').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            icons: {
                up: "icon-arrow-up-circle icons font-2xl",
                down: "icon-arrow-down-circle icons font-2xl"
            },
            sideBySide: true
        })

    </script>
@endpush



<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre usuario:') !!}
    {!! Form::text('name', isset($usuario)?$usuario->name:null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', isset($usuario)?$usuario->email:null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
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
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
