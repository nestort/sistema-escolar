<li class="nav-item {{ Request::is('usuarios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('usuarios.index') }}">
        <i class="nav-icon icon-user"></i>
        <span>Usuarios</span>
    </a>
</li>
<li class="nav-item {{ Request::is('periodos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('periodos.index') }}">
        <i class="nav-icon icon-layers"></i>
        <span>Periodos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('alumnos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('alumnos.index') }}">
        <i class="nav-icon icon-graduation"></i>
        <span>Alumnos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('materias*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('materias.index') }}">
        <i class="nav-icon icon-notebook"></i>
        <span>Materias</span>
    </a>
</li>
<li class="nav-item {{ Request::is('inscripcions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('inscripcions.index') }}">
        <i class="nav-icon icon-badge"></i>
        <span>Inscripciones</span>
    </a>
</li>
