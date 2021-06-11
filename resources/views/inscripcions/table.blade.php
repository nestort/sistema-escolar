<div class="table-responsive-sm">
    <table class="table table-striped" id="inscripcions-table">
        <thead>
            <tr>
                <th>Materia Id</th>
        <th>Alumno Id</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($inscripcions as $inscripcion)
            <tr>
                <td>{{ $inscripcion->materia_id }}</td>
            <td>{{ $inscripcion->alumno_id }}</td>
            <td>{{ $inscripcion->status }}</td>
                <td>
                    {!! Form::open(['route' => ['inscripcions.destroy', $inscripcion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('inscripcions.show', [$inscripcion->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('inscripcions.edit', [$inscripcion->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>