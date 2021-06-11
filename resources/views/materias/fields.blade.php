<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Horario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horario', 'Horario:') !!}
    {!! Form::text('horario', null, ['class' => 'form-control','id'=>'horario']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#horario').datetimepicker({
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
    {!! Form::label('periodo_id', 'Periodo Id:') !!}
    {!! Form::number('periodo_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('materias.index') }}" class="btn btn-secondary">Cancel</a>
</div>
