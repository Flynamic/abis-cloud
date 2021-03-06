<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <i class="nav-icon cui-speedometer"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('datasets.index') }}">
                <i class="nav-icon fas fa-database"></i> Datasets
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('species.index') }}">
                <i class="nav-icon cui-list"></i> Species
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('data.index') }}">
                <i class="nav-icon fas fa-image"></i> Data
            </a>
        </li>
        @can('view', \App\User::class)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="nav-icon fas fa-user"></i> Users
            </a>
        </li>
        @endcan
    </ul>
</nav>
<button class="sidebar-minimizer brand-minimizer" type="button"></button>
