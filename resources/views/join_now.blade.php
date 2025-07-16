@extends('layouts.app') <!-- Extend the layout -->

@section('title', 'Contact Us Page') <!-- Define a title for this page -->


@section('content') <!-- Define the content section -->
<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header-join_now">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Begin Your Journey</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Join Now</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
 <!-- Contact Start -->
 <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Welcome to Our Team!</h6>
                <h1 class="mb-5">Let’s Get You Started – Please Complete the Details Below</h1>
            </div>
            <div class="row g-12">
                <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    <form method="POST" action="{{ route('form_submit') }}">
                    @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="email" placeholder="Your Email" name="email"  required>
                                        @error('email') 
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="phone_number" placeholder="Your Phone Number" name="phone_number"  required>
                                        @error('phone_number') 
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    <label for="phone_number">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select custom-select" id="course_id" name="course_id" required>
                                    <option value="" disabled selected>Select a course</option>
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="course">Course</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="start_date" placeholder="Select Course Start Date" name="start_date"  required>
                                    <label for="start_date">Course Start Date</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nice_to_have" placeholder="Nice To Have" name="nice_to_have"  required>
                                    <label for="nice_to_have">Nice To Have</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="payment_method_id" name="payment_method_id" required>
                                    <option value="" disabled selected>Select a payment type</option>
                                        @foreach($payments as $payment)
                                            <option value="{{ $payment->id }}">{{ $payment->payment_method }}</option>
                                        @endforeach
                                    </select>
                                    <label for="payment_method_id">Payment Method</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"  name="message" style="height: 150px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    @endsection