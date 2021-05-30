<input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-user"></span>
                <span>Admin Panel</span>
            </h3>
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('admin') }}">
                        <span class="ti-home"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('add_doctor') }}">
                        <span class=""><i class="fas fa-user-nurse"></i></span>
                        <span>Doctor</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
