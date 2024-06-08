<li class="nav-item">
    <a href="{{ route('admin.dashboard.index') }}" class="nav-link{{ Request::is('dashboard')?' active':'' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('developerthemenepal.module.index') }}" class="nav-link{{ Request::is('module')?' active':'' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Module
        </p>
    </a>
</li>
