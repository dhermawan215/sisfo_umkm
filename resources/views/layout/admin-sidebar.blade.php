<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Perizinan UMKM</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Modul
            </li>

            <li class="sidebar-item {{ request()->is('admin') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->is('admin/perizinan*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.perizinan') }}">
                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Perizinan</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->is('admin/user-management*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.user_management') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">User Management</span>
                </a>
            </li>
        </ul>

    </div>
</nav>