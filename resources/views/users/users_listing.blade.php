@extends('layouts.users_header') <!-- Extend the layout -->
 
@section('title', 'Home Page') <!-- Define a title for this page -->
 
@section('content') <!-- Define the content section -->
   <!-- Carousel Start -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="asset/img/Banner1.jpg" alt="" style="height: 600px;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Where Imagination Meets Innovation – Dive Into Studio Making</h5>
                                <h1 class="display-3 text-white animated slideInDown">Design. Build. Inspire. Start Your Journey as a Studio Maker</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Master the art of studio design and creation. Build your dream space with expert guidance. Enroll now and create.</p>
                                <a href="{{ route('users_emergency') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="asset/img/Banner2.jpg" alt="" style="height: 600px;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Lights, Camera, Action – Ignite Your Acting Passion</h5>
                                <h1 class="display-3 text-white animated slideInDown">Step into the Spotlight – Unleash Your Inner Actor with Our Drama Course</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Learn acting, stage presence, and character development. Turn your passion into performance. Join now and start your acting journey</p>
                                <a href="{{ route('users_emergency') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="asset/img/Banner3.jpg" alt="" style="height: 600px;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Chart Your Course – Find the Ideal Path to Your Future !!</h5>
                                <h1 class="display-3 text-white animated slideInDown">Choose Your Path – Discover the Perfect Course for Your Future</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Explore our wide range of courses and find the one that suits your passion and career goals. Start your journey today</p>
                                <a href="{{ route('users_emergency') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif
    <!-- Categories Start -->

    <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="left-image">
            <img src="assets/images/cta-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h6>Get the sale right now!</h6>
          <h4>Up to 50% OFF For VFX & CGI courses</h4>
          <p>Transform your creativity into stunning visual effects with our VFX & CGI courses! Learn industry-standard tools like Adobe After Effects, Nuke, Maya, and Blender to create breathtaking animations, realistic special effects, and cinematic visuals.</p>
        </div>
      </div>
    </div>
  </section>
   
  <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5">Top-Rated Courses</h1>
        </div>
        <div class="row g-4 justify-content-center">
        @foreach($courses as $course)
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->index + 1 }}s">
        <div class="course-item bg-light shadow-lg rounded overflow-hidden d-flex flex-column" style="height: 100%;">
            <div class="position-relative">
                @php
                    $imageIndex = ($loop->index % 3) + 1; // Cycles through 1, 2, 3
                @endphp
                <img class="img-fluid w-100" src="{{ asset('asset/img/course-' . $imageIndex . '.jpg') }}" alt="{{ $course->course_name }}">
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                    <!-- Read More Button (Triggers Modal) -->
                    <button type="button" class="btn btn-sm btn-primary px-4 border-end" style="border-radius: 30px 0 0 30px;" data-bs-toggle="modal" data-bs-target="#descriptionModal{{ $course->id }}">
                        Read More
                    </button>
                    <!-- Join Now Button (Triggers Confirmation Modal) -->
                    @if(auth()->user() && auth()->user()->courses->contains($course->id))
                        <button type="button" class="btn btn-sm btn-secondary px-4" style="border-radius: 0 30px 30px 0;" disabled>
                            Already Joined
                        </button>
                    @else
                        <button type="button" class="btn btn-sm btn-success px-4 join-now-button" style="border-radius: 0 30px 30px 0;" 
                                data-bs-toggle="modal" data-bs-target="#confirmationModal"
                                data-course-id="{{ $course->id }}" 
                                data-course-name="{{ $course->course_name }}">
                            Join Now
                        </button>
                    @endif
                </div>
            </div>
            <div class="text-center p-4 d-flex flex-column flex-grow-1">
                <h4 class="fw-bold text-primary">{{ $course->course_name }}</h4>
                <p class="text-muted mb-2">Course ID: <span class="fw-semibold">{{ $course->course_id }}</span></p>
                <p class="text-muted mb-2"><i class="fas fa-clock me-2"></i>Duration: {{ $course->duration }} Days</p>
                <p class="text-muted mb-2"><i class="fas fa-users me-2"></i>Capacity: {{ $course->capacity }}</p>
                <h5 class="text-success fw-bold text-primary">{{ '€' . number_format($course->price, 2) }}</h5>
            </div>
        </div>
    </div>

    <!-- Modal for Course Description -->
    <div class="modal fade" id="descriptionModal{{ $course->id }}" tabindex="-1" aria-labelledby="descriptionModalLabel{{ $course->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="descriptionModalLabel{{ $course->id }}">{{ $course->course_name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ $course->description }}</p>
                    <p>Start Date : {{ $course->start_date }} - End Date : {{ $course->end_date }}</p>
                    <!-- <p>End Date : {{ $course->end_date }}</p> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
        </div>
    </div>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Confirm Join Course</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to join the course: <strong id="courseNameInModal"></strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="confirmJoinButton">Yes, Join Now</button>
            </div>
        </div>
    </div>
</div>

<!-- Custom Success Alert (Hidden by Default) -->
<div id="successAlert" class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3" style="display: none; z-index: 1100;" role="alert">
    <span id="successMessage"></span>
    <button type="button" class="btn-close" onclick="hideSuccessAlert()"></button>
</div>
 
    <!-- Testimonial End -->
      <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="asset/lib/wow/wow.min.js"></script>
<script src="asset/lib/easing/easing.min.js"></script>
<script src="asset/lib/waypoints/waypoints.min.js"></script>
<script src="asset/lib/owlcarousel/owl.carousel.min.js"></script>
 
<!-- Template Javascript -->
<script src="asset/js/main.js"></script>
<!-- JavaScript for Join Now Button and Success Alert -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        let currentCourseId = null;
        let currentCourseName = null;
        
        // When a Join Now button is clicked, store the course info and show confirmation modal
        $('.join-now-button').click(function () {
            currentCourseId = $(this).data('course-id');
            currentCourseName = $(this).data('course-name');
            $('#courseNameInModal').text(currentCourseName);
        });
        
        // When confirm button is clicked in the modal
        $('#confirmJoinButton').click(function () {
            if (currentCourseId && currentCourseName) {
                // Send AJAX request
                $.ajax({
                    url: '/join-course/' + currentCourseId,
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if (response.success) {
                            // Close the confirmation modal
                            $('#confirmationModal').modal('hide');
                            
                            // Show success alert
                            $('#successMessage').text('You have successfully joined the course: ' + currentCourseName);
                            $('#successAlert').fadeIn().delay(3000).fadeOut();
                            
                            // Disable the Join Now button and change its text
                            $('.join-now-button[data-course-id="' + currentCourseId + '"]')
                                .removeClass('btn-success')
                                .addClass('btn-secondary')
                                .text('Already Joined')
                                .prop('disabled', true);
                        }
                    },
                    error: function (xhr) {
                        $('#confirmationModal').modal('hide');
                        if (xhr.status === 419) {
                            alert('CSRF token mismatch. Please refresh the page and try again.');
                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    }
                });
            }
        });
    });

    // Hide success alert
    function hideSuccessAlert() {
        $('#successAlert').fadeOut();
    }
</script>

@endsection