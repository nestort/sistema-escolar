<!-- Materia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('materia_id', 'Materia Id:') !!}
    {!! Form::number('materia_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Alumno Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alumno_id', 'Alumno Id:') !!}
    {!! Form::number('alumno_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('inscripcions.index') }}" class="btn btn-secondary">Cancel</a>
</div>
