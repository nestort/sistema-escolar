<div class="table-responsive-sm">
    <table class="table table-striped" id="periodos-table">
        <thead>
            <tr>
                <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($periodos as $periodo)
            <tr>
                <td>{{ $periodo->fecha_inicio }}</td>
            <td>{{ $periodo->fecha_fin }}</td>
                <td>
                    {!! Form::open(['route' => ['periodos.destroy', $periodo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('periodos.show', [$periodo->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('periodos.edit', [$periodo->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>