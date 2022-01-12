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
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="ti-more-alt menu-icon"></i>
                    <span class="menu-title"> Category</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('add-category')}}"> Add Category </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('category')}}"> Show Category </a></li>
                    </ul>
                </div>
            </li>

           <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="ti-more menu-icon"></i>
                    <span class="menu-title">Sub Category</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('add-sub-category')}}"> Add SubCategory </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('sub-category')}}"> Show SubCategory </a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="ti-control-forward menu-icon"></i>
                    <span class="menu-title">Flash News</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('add-flash-news')}}"> Add news </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('flash-news')}}"> Show news </a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="ti-control-forward menu-icon"></i>
                    <span class="menu-title">Trending</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('add-trending')}}"> Add news </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('show-trending')}}"> Show news </a></li>
                    </ul>
                </div>
            </li>




            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="ti-view-list menu-icon"></i>
                    <span class="menu-title">Sponsored news</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection
