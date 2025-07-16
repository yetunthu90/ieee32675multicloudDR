@extends('layouts.dashboard')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Payment Module</h1>
            <main>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                        <i class="fa fa-plus-square mr-2" aria-hidden="true"></i>Add Payment Method
                        </div>
                        <!-- Back Button -->
                        <div>
                            <a href="{{ route('payments') }}" class="btn btn-primary">
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
                                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">New Payment</h3></div>
                                                    <div class="card-body">
                                                        <form action="{{ route('payments.store') }}" method="POST">
                                                            @csrf
                                                            <div class="form-row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="payment_method">Payment Method Name</label>
                                                                        <input class="form-control py-4" id="payment_method" type="text" name="payment_method" placeholder="Enter Payment Method"  required/>
                                                                                @error('payment_method') 
                                                                                    <div class="text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                
                                                                 <div class="col-12">
                                                                    <button class="btn btn-primary w-100 py-3" type="submit">Create Payment Method</button>
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