<!-- resources/views/layouts/header.blade.php -->
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('dashboard') }}">ReelCraft Academy</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
        <i class="fa fa-bars"></i>
    </button>
    <!-- Navbar-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </form>
    <!-- <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('index') }}">Logout</a>
            </div>
        </li>
    </ul> -->
    <ul class="navbar-nav ml-auto ml-md-0">
    <!-- Welcome message on the left side -->
    <li class="nav-item mt-2 mr-4" style="color:#ffff;">
        @if(isset($loggedInUser))
            <p class="welcome-text">Welcome, {{ $loggedInUser->first_name . ' ' . $loggedInUser->last_name }}</p>
        @else
            <p class="welcome-text">Welcome, Guest!</p>
        @endif
    </li>

    <!-- Dropdown menu on the right side -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('index') }}">Logout</a>
        </div>
    </li>
</ul>
</nav>
