@extends('layouts.app') <!-- Extend the layout -->

@section('title', 'Contact Us Page') <!-- Define a title for this page -->


@section('content') <!-- Define the content section -->
<body style="background-color: #d5f7fb !important;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Forgot Password</h3></div>
                                    <div class="card-body">
                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <h6>@if(session()->has('message')){{session()->get('message')}}</h6>@endif
                                        <form action="{{ route('do.forgot.password') }}" method="POST">
                                        @csrf <!-- Laravel's CSRF protection -->
                                            <div class="form-group"><label class="small mb-1" for="email">Email</label>
                                                <input class="form-control py-3" id="email" name="email"  type="email" placeholder="Enter email address" required />
                                                @error('first_name') 
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small"></a>
                                              <!-- <a class="btn btn-primary" href="index.html">Login</a> -->
                                              <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{ route('registeration') }}">Need an account? Sign up!</a></div>
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
        <script src="js/scripts.js"></script>
    </body>
@endsection