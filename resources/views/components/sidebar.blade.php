<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">ABSENSI-APP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">ABS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('home') }}"><i class="fas fa-fire"></i> <span>Home</span></a>
            </li>
            <li class="menu-header">Pages</li>
            <li class="{{ Request::is('attendances') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('attendances.index') }}"><i class="fas fa-calendar"></i> <span>Attendances</span></a>
            </li>
            <li class="{{ Request::is('permissions') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('permissions.index') }}"><i class="fas fa-file-alt"></i> <span>Permissions</span></a>
            </li>
            <li class="menu-header">Settings</li>
            <li class="{{ Request::is('users') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('users.index') }}"><i class="fas fa-user"></i> <span>Users</span></a>
            </li>
            <li class="{{ Request::is('companies/1') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('companies.show', 1) }}"><i class="fas fa-building"></i> <span>Company</span></a>
            </li>
        </ul>
    </aside>
</div>
