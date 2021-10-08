@section('sidebar')

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin')}}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Admin Users</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('add-admin-user')}}"> Add User </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('admin-users')}}"> Show Users </a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                    <i class="icon-ban menu-icon"></i>
                    <span class="menu-title">Error pages</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="error">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href=""> 404 </a></li>
                        <li class="nav-item"> <a class="nav-link" href=""> 500 </a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="ti-shift-right-alt menu-icon"></i>
                    <span class="menu-title">Tranding slide</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="ti-menu menu-icon"></i>
                    <span class="menu-title">Tranding Topics</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="ti-layout-slider-alt menu-icon"></i>
                    <span class="menu-title">Sponsored news</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="ti-view-list menu-icon"></i>
                    <span class="menu-title">Recent Post</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection
