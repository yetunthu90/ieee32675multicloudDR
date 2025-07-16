@extends('layouts.app') <!-- Extend the layout -->

@section('title', 'Contact Us Page') <!-- Define a title for this page -->


@section('content') <!-- Define the content section -->
<body style="background-color: #d5f7fb !important;">
<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                        <div class="card-body">
                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                            <form action="{{ route('save.register') }}" method="POST">
                                             @csrf <!-- Laravel's CSRF protection -->
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <div class="form-group"><label class="small mb-1" for="first_name">First Name</label>
                                                                <input class="form-control py-3" id="first_name" type="text" name="first_name" placeholder="Enter first name"  required/>
                                                                    @error('first_name') 
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                                <div class="form-group"><label class="small mb-1" for="last_name">Last Name</label>
                                                                    <input class="form-control py-3" id="last_name" type="text" name="last_name" placeholder="Enter last name" required />
                                                                            @error('last_name') 
                                                                            <div class="text-danger">{{ $message }}</div>
                                                                            @enderror  
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-floating">
                                                            <div class="form-group"><label class="small mb-1" for="email">Email</label>
                                                                <input class="form-control py-3" id="email" type="text" name="email"  placeholder="Enter email address"  required/>
                                                                    @error('email') 
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                    @enderror 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-floating">
                                                                <div class="form-group"><label class="small mb-1" for="password">Password</label>
                                                                    <input class="form-control py-3" id="password" type="password" name="password" placeholder="Enter password" required />
                                                                        @error('password') 
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                        @enderror 
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 py-3" type="submit">Create Account</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{ route('login') }}">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('asset/js/scripts.js')}}"></script>
    </body>
@endsection