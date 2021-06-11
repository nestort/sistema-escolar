<li class="nav-item {{ Request::is('periodos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('periodos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Periodos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('alumnos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('alumnos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Alumnos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('usuarios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('usuarios.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Usuarios</span>
    </a>
</li>
