@extends('layouts.dashboard')

@section('content')
    <main>
    <div class="container-fluid">
            <h1 class="mt-4">Message Module</h1>
            <main>
                <div class="card mb-4">
                    <!-- <div class="card-header"><i class="fas fa-table mr-1"></i>Course  Details
                    <div class="col-4">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                    </div> -->
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                        <i class="fa fa-eye mr-2" aria-hidden="true"></i>Message Details
                        </div>
                         <!-- Back Button -->
                        <div>
                            <a href="{{ route('contactus_list') }}" class="btn btn-primary">
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
                                                                        <label class="small mb-1 font-weight-bold" for="name"> Name</label>
                                                                        <p class="form-control" id="name">{{ $Messages->name }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group border rounded p-3">
                                                                        <label class="small mb-1 font-weight-bold" for="duration">Email</label>
                                                                        <p class="form-control" id="email">{{ $Messages->email }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group border rounded p-3">
                                                                        <label class="small mb-1 font-weight-bold" for="subject">Subject</label>
                                                                        <p class="form-control" id="subject">{{ $Messages->subject }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group border rounded p-3">
                                                                        <label class="small mb-1 font-weight-bold" for="message">Message</label>
                                                                        <textarea class="form-control" id="message" rows="4">{{ $Messages->message  }}</textarea>
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