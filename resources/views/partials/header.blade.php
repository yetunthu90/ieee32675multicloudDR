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
                <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class=" nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown">Courses</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ route('level_one') }}" class="dropdown-item">Level 1</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                <a href="{{ route('login') }}" class="nav-item nav-link">Sign In</a>
                <a href="{{ route('join_now') }}" class="nav-item nav-link">Enquiry</a>
            </div>
            <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
    </nav>
    <!-- Navbar End -->
</header>
