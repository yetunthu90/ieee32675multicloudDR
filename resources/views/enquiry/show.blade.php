@extends('layouts.dashboard')

@section('content')
    <main>
    <div class="container-fluid">
            <h1 class="mt-4">Enquiry Module</h1>
            <main>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                        <i class="fa fa-eye mr-2" aria-hidden="true"></i>Enquiry Details
                        </div>
                         <!-- Back Button -->
                        <div>
                            <a href="{{ route('enquiry') }}" class="btn btn-primary">
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
                                                    <div class="card-body">
                                                            <div class="form-row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group border rounded p-3">
                                                                        <label class="small mb-1 font-weight-bold" for="name">Name</label>
                                                                        <p class="form-control" id="name">{{ $CustomerRequest->name }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group border rounded p-3">
                                                                        <label class="small mb-1 font-weight-bold" for="email">Email</label>
                                                                        <p class="form-control" id="email">{{ $CustomerRequest->email }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group border rounded p-3">
                                                                        <label class="small mb-1 font-weight-bold" for="phone_number">Phone Number</label>
                                                                        <p class="form-control" id="phone_number">{{ $CustomerRequest->phone_number }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group border rounded p-3">
                                                                        <label class="small mb-1 font-weight-bold" for="course_id">Course</label>
                                                                        <p class="form-control" id="course_id">{{ $CustomerRequest->course->course_name }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group border rounded p-3">
                                                                        <label class="small mb-1 font-weight-bold" for="start_date">Start Date</label>
                                                                        <p class="form-control" id="start_date">{{ $CustomerRequest->start_date }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group border rounded p-3">
                                                                        <label class="small mb-1 font-weight-bold" for="nice_to_have">Nice to have</label>
                                                                        <p class="form-control" id="nice_to_have">{{ $CustomerRequest->nice_to_have }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group border rounded p-3">
                                                                        <label class="small mb-1 font-weight-bold" for="payment_method_id">Payment Method</label>
                                                                        <textarea class="form-control" id="payment_method_id" rows="4">{{ $CustomerRequest->payment->payment_method}}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group border rounded p-3">
                                                                        <label class="small mb-1 font-weight-bold" for="message">Message</label>
                                                                        <textarea class="form-control" id="message" rows="4">{{ $CustomerRequest->message }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div> 
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