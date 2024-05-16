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
            <li class="{{ Request::is('user') ? 'active' : '' }}">
                <a class="nav-link"
                    href="#"><i class="fas fa-fire"></i> <span>Absensi</span></a>
            </li>
            <li class="menu-header">Settings</li>
            <li class="{{ Request::is('user') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('users.index') }}"><i class="fas fa-fire"></i> <span>Users</span></a>
            </li>
        </ul>
    </aside>
</div>
