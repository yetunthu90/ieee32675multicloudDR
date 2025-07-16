<header>
    
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-film me-3"></i>ReelCraft Academy</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('users.listing') }}" class="nav-item nav-link welcome-link">
                    @if(isset($loggedInUser))
                        <p class="welcome-text">Welcome, {{ $loggedInUser->first_name . ' ' . $loggedInUser->last_name }}</p>
                    @else
                        <p class="welcome-text">Welcome, Guest!</p>
                    @endif
                </a>
                <div class="nav-item dropdown">
                    <a href="#" class=" nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown"> <i class="fas fa-user"></i></a>
                    <div class="dropdown-menu fade-down m-0">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </div>
                </div>    
                <!-- <a href="{{ route('users_emergency') }}" class="nav-item nav-link">Emergency Contact</a>   -->
                <a href="{{ route('users_emergency') }}" class="nav-item nav-link">Need Assitance</a>
            </div>
            <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
    </nav>
    <!-- Navbar End -->
    

</header>
<style>
    /* Add this to your CSS file or <style> tag */

.welcome-link {
    text-decoration: none; /* Remove underline */
    color: inherit; /* Inherit color from parent */
}

.welcome-text {
    color:rgb(21, 161, 164); /* Dark blue color */
   
}


</style>
