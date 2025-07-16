@extends('layouts.dashboard')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Users Module</h1>
            <main>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                        <i class="fa fa-plus-square mr-2" aria-hidden="true"></i> New User Details
                        </div>
                        <!-- Back Button -->
                        <div>
                            <a href="{{ route('users') }}" class="btn btn-primary">
                                <i class="fa fa-arrow-left mr-1"></i> Back
                            </a>
                        </div>
                    </div>
                     
                    
                    <div id="layoutAuthentication">
                            <div id="layoutAuthentication_content">
                                <main>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12">
                                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">New User</h3></div>
                                                    <div class="card-body">
                                                        <form action="{{ route('users.store') }}" method="POST">
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
                                                                    <button class="btn btn-primary w-100 py-3" type="submit">Create New User</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                    </div> 
                </div>
            </main>
        </div>
    </main>
@endsection