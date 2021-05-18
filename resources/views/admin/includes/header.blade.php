<!-- begin #header -->
<div id="header" class="header navbar-default">
    <!-- begin navbar-header -->
    <div class="navbar-header">
        <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>SecretFilmSchool</b> Admin</a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- end navbar-header --><!-- begin header-nav -->
    <ul class="navbar-nav navbar-right">
        <li class="dropdown navbar-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="/admin/img/user/user-13.jpg" alt="" />
                <span class="d-none d-md-inline">{{$currentUser->name}} {{$currentUser->last_name}}</span> <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('admin.profile.update') }}" class="dropdown-item">Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();" class="dropdown-item">Log Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
    <!-- end header-nav -->
</div>
<!-- end #header -->
