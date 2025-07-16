@extends('layouts.dashboard')

@section('content')
    <main>
    <div class="container-fluid">
            <h1 class="mt-4">Message Module</h1>
            <main>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                        <i class="fa fa-pencil mr-2" aria-hidden="true"></i>Edit Message Details
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
                                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Message</h3></div>
                                                    <div class="card-body">
                                                        <form action="{{ route('contactus.update', $Messages->id) }}" method="POST">
                                                            @csrf
                                                            <div class="form-row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="name"> Name</label>
                                                                        <input class="form-control py-4" id="name" type="text" name="name" value="{{ $Messages->name }}"  required/>
                                                                                @error('name') 
                                                                                    <div class="text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="email">Email</label>
                                                                        <input class="form-control py-4" id="email" type="text" name="email" value="{{ $Messages->email }}" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="subject">Subject</label>
                                                                        <input class="form-control py-4" id="subject" type="text" name="subject" value="{{ $Messages->subject }}"  required/>
                                                                                @error('subject') 
                                                                                    <div class="text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="message">Message</label>
                                                                        <textarea class="form-control py-4" id="message" name="message" rows="4"  required>{{ $Messages->message }}</textarea>
                                                                        @error('message') 
                                                                                    <div class="text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                    </div>
                                                                 </div>
                                                                 <div class="col-12">
                                                                    <button class="btn btn-primary w-100 py-3" type="submit">Update Message Details</button>
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