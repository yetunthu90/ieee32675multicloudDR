@extends('layouts.dashboard')

@section('content')
    <main>
    <div class="container-fluid">
            <h1 class="mt-4">Enquiry Module</h1>
            <main>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                        <i class="fa fa-pencil mr-2" aria-hidden="true"></i>Edit Enquiry Details
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
                                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit  Enquiry</h3></div>
                                                    <div class="card-body">
                                                        <form action="{{ route('enquiry.update', $CustomerRequest->id) }}" method="POST">
                                                            @csrf
                                                            <div class="form-row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="name">name</label>
                                                                        <input class="form-control py-4" id="name" type="text" name="name" value="{{ $CustomerRequest->name }}"  required/>
                                                                                @error('name') 
                                                                                    <div class="text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="email">Email</label>
                                                                        <input class="form-control py-4" id="email" type="text" name="email" value="{{ $CustomerRequest->email }}" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="phone_number">Phone Number</label>
                                                                        <input class="form-control py-4" id="phone_number" type="text" name="phone_number" value="{{ $CustomerRequest->phone_number }}"  required/>
                                                                                @error('phone_number') 
                                                                                    <div class="text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="course_id">Course</label>
                                                                        <select class="form-select custom-select" id="course_id" name="course_id" required>
                                                                            <option value="" disabled>Select a course</option>
                                                                            @foreach($courses as $course)
                                                                                <option value="{{ $course->id }}" {{ $CustomerRequest->course_id == $course->id ? 'selected' : '' }}>
                                                                                    {{ $course->course_name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="start_date">Course Start Date</label>
                                                                        <input class="form-control py-4" id="start_date" type="text" name="start_date" value="{{ $CustomerRequest->start_date }}"  required/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="price">Nice to have</label>
                                                                        <input class="form-control py-4" id="nice_to_have" type="text" name="nice_to_have" value="{{ $CustomerRequest->nice_to_have }}"  required/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="payment_method_id">Payment Method</label>
                                                                        <select class="form-select custom-select" id="payment_method_id" name="payment_method_id" required>
                                                                            <option value="" disabled>Select a payment method</option>
                                                                            @foreach($payments as $payment)
                                                                                <option value="{{ $payment->id }}" {{ $CustomerRequest->payment_method_id == $payment->id ? 'selected' : '' }}>
                                                                                    {{ $payment->payment_method }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="message">Message</label>
                                                                        <textarea class="form-control py-4" id="message" name="message" rows="4"  required>{{ $CustomerRequest->message }}</textarea>
                                                                    </div>
                                                                 </div>
                                                                 <div class="col-12">
                                                                    <button class="btn btn-primary w-100 py-3" type="submit">Update Enquiry</button>
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