<div class="table-responsive-sm">
    <table class="table table-striped" id="materias-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Horario</th>
        <th>Min Participantes</th>
        <th>Max Participantes</th>
        <th>Periodo Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($materias as $materia)
            <tr>
                <td>{{ $materia->nombre }}</td>
            <td>{{ $materia->horario }}</td>
            <td>{{ $materia->min_participantes }}</td>
            <td>{{ $materia->max_participantes }}</td>
            <td>{{ $materia->periodo_id }}</td>
                <td>
                    {!! Form::open(['route' => ['materias.destroy', $materia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('materias.show', [$materia->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('materias.edit', [$materia->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>