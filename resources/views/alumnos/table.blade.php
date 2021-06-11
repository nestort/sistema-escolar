<div class="table-responsive-sm">
    <table class="table table-striped" id="alumnos-table">
        <thead>
            <tr>
                <th>Nombre(s)</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>                
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->nombres }}</td>
                    <td>{{ $alumno->apepaterno }}</td>
                    <td>{{ $alumno->apematerno }}</td>
                    
                    <td>
                        {!! Form::open(['route' => ['alumnos.destroy', $alumno->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('alumnos.show', [$alumno->id]) }}" class='btn btn-ghost-success'><i
                                    class="fa fa-eye"></i></a>
                            <a href="{{ route('alumnos.edit', [$alumno->id]) }}" class='btn btn-ghost-info'><i
                                    class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
