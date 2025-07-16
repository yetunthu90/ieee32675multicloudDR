@extends('layouts.app') <!-- Extend the layout -->
 
@section('title', 'Home Page') <!-- Define a title for this page -->
 
@section('content') <!-- Define the content section -->
   <!-- Carousel Start -->
   <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="asset/img/home_a.jpg" alt="" style="height: 600px;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">State-of-the-Art Facilities, Endless Possibilities</h5>
                                <h1 class="display-3 text-white animated slideInDown">ReelCraft Academy—Where Creativity Thrives</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Craft your vision with cutting-edge technology, collaborative spaces, and the guidance of seasoned industry professionals.</p>
                                <a href="{{ route('about') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="{{ route('join_now') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="asset/img/home_b.png" alt="" style="height: 600px;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Moving Castle Creations Workshop</h5>
                                <h1 class="display-3 text-white animated slideInDown">Dive Into the Magic of 3D Animation – Moving Castle Creations</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Join our December workshop to learn the art of animation and create your own moving masterpiece.</p>
                                <a href="{{ route('about') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="{{ route('join_now') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="asset/img/home_c.png" alt="" style="height: 600px;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Course Selection Banner</h5>
                                <h1 class="display-3 text-white animated slideInDown">Choose Your Movie-Making Journey</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Browse through our range of specialized courses and book your spot today!</p>
                                <a href="{{ route('about') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="{{ route('join_now') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
 
 
    <!-- Service Start -->
    <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 d-flex">
            <!-- Column 1 -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3 h-100">
                    <div class="p-4">
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        <h5 class="mb-3">Best Instructors</h5>
                        <p>Exceptional instructors who are highly knowledgeable, patient, and passionate about teaching.</p>
                    </div>
                </div>
            </div>
            <!-- Column 2 -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3 h-100">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5 class="mb-3">Online Classes</h5>
                        <p>Convenient and well-structured online classes that provide flexibility without compromising quality.</p>
                    </div>
                </div>
            </div>
            <!-- Column 3 -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3 h-100">
                    <div class="p-4">
                        <i class="fa fa-3x fa-home text-primary mb-4"></i>
                        <h5 class="mb-3">Home Projects</h5>
                        <p>Home projects are a fantastic way to apply what we've learned and reinforce concepts.</p>
                    </div>
                </div>
            </div>
            <!-- Column 4 -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3 h-100">
                    <div class="p-4">
                        <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                        <h5 class="mb-3">Book Library</h5>
                        <p>The book library is an excellent resource, offering a diverse collection of materials.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Service End -->
 
 
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="asset\img\aboutusone.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to Reelcraft Academy</h1>
                    <p class="mb-4" style="text-align: justify;">Reelcraft Academy is a premier institution dedicated to nurturing creativity and innovation in the art of storytelling through film and media. With a focus on hands-on learning and real-world experience, we offer comprehensive programs designed to equip aspiring filmmakers, writers, and digital creators with the tools they need to bring their visions to life. Our curriculum spans every aspect of the filmmaking process, from scriptwriting and cinematography to editing and post-production, ensuring our students develop a well-rounded skill set. At Reelcraft Academy, we blend traditional techniques with cutting-edge technology, empowering students to explore and push the boundaries of modern storytelling.</p>
                    <!-- <p class="mb-4" style="text-align: justify;">Our vibrant community of passionate educators and industry professionals fosters a collaborative and inspiring environment where creativity thrives. Students benefit from access to state-of-the-art facilities, expert mentorship, and networking opportunities with leaders in the media industry. Whether you're an aspiring director, a budding screenwriter, or a visionary editor, Reelcraft Academy provides a supportive platform to develop your talents and make your mark in the world of film and digital media. Join us and become part of a legacy that shapes the storytellers of tomorrow.</p> -->
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certification</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Diverse Course Offerings</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Industry-Relevant Curriculum</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Creative Community</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('about') }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
 
 
    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="asset/img/cat-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Web Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="asset/img/cat-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Graphic Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="asset/img/cat-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Video Editing</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="asset/img/cat-4.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Online Marketing</h5>
                            <small class="text-primary">49 Courses</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->
 
 
    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Popular Courses</h1>
            </div>
            <!-- <div class="row g-4 justify-content-center">
                @foreach($courses as $course)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->index + 1 }}s">
                    <div class="course-item bg-light shadow-lg rounded overflow-hidden d-flex flex-column" style="height: 100%;">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('asset/img/course-' . ($loop->index + 1) . '.jpg') }}" alt="{{ $course->course_name }}">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="btn btn-sm btn-primary px-4 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-success px-4" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 d-flex flex-column flex-grow-1">
                            <h4 class="fw-bold text-primary">{{ $course->course_name }}</h4>
                            <p class="text-muted mb-2">Course ID: <span class="fw-semibold">{{ $course->course_id }}</span></p>
                            <p class="text-muted mb-2"><i class="fas fa-clock me-2"></i>{{ $course->duration }} Days</p>
                            <p class="text-muted mb-2"><i class="fas fa-users me-2"></i>Capacity: {{ $course->capacity }}</p>
                            <h5 class="text-success fw-bold text-primary">{{ '€' . number_format($course->price, 2) }}</h5>
                            <p class="text-dark mt-3 flex-grow-1">{{ Str::limit($course->description, 100, '...') }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> -->
            <div class="row g-4 justify-content-center">
                @foreach($courses as $course)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->index + 1 }}s">
                        <div class="course-item bg-light shadow-lg rounded overflow-hidden d-flex flex-column" style="height: 100%;">
                            <div class="position-relative">
                                <!-- Dynamically assign images using modulo operator -->
                                @php
                                    $imageIndex = ($loop->index % 3) + 1; // Cycles through 1, 2, 3
                                @endphp
                                <img class="img-fluid w-100" src="{{ asset('asset/img/course-' . $imageIndex . '.jpg') }}" alt="{{ $course->course_name }}">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <!-- Read More Button (Triggers Modal) -->
                                    <button type="button" class="btn btn-sm btn-primary px-4 border-end" style="border-radius: 30px 0 0 30px;" data-bs-toggle="modal" data-bs-target="#descriptionModal{{ $course->id }}">
                                        Read More
                                    </button>
                                    <!-- Join Now Button (Triggers Custom Alert) -->
                                    <!-- <button type="button" class="btn btn-sm btn-success px-4" style="border-radius: 0 30px 30px 0;" href="{{ route('join_now') }}">
                                        Join Now
                                    </button>  -->
                                    <a href="{{ route('registeration') }}" class="btn btn-sm btn-success px-4" style="border-radius: 0 30px 30px 0;">Join Now</a>
                                </div>
                            </div>
                            <div class="text-center p-4 d-flex flex-column flex-grow-1">
                                <h4 class="fw-bold text-primary">{{ $course->course_name }}</h4>
                                <p class="text-muted mb-2">Course ID: <span class="fw-semibold">{{ $course->course_id }}</span></p>
                                <p class="text-muted mb-2"><i class="fas fa-clock me-2"></i>{{ $course->duration }} Days</p>
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
    <!-- Courses End -->
 
 
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                <h1 class="mb-5">Expert Instructors</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                        <img class="img-fluid" src="asset/img/team-5.jpg" alt="" style="height: 311px; width: 300px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Monica Beckham</h5>
                            <small>Director</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="asset/img/team-1.jpeg" alt=""style="height: 311px; width: 300px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Helen Gabby</h5>
                            <small>Story Writer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="asset/img/team-3.png" alt=""style="height: 311px;width: 300px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Thomas Joseph</h5>
                            <small>Cinematographer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="asset/img/team-2.jpeg" alt=""style="height: 311px; width: 300px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Ruby Yanson</h5>
                            <small>Producer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
 
 
    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Learning Stories</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="asset/img/review-person.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Emily Watson</h5>
                    <p>Production Manager</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Reel Craft Academy offered an exceptional learning experience. The classes were well-structured, and the support from the team was outstanding.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="asset/img/review-person.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Oliver Bennett</h5>
                    <p>Film Director</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">My experience at Reel Craft Academy was fantastic! The instructors were knowledgeable and the course content was engaging, making learning a true pleasure.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="asset/img/review-person.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Sophie Parker</h5>
                    <p>Cinematographer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The workshop at Reel Craft Academy was exactly what I needed to boost my confidence. I learned so much in a short time and felt truly inspired.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="asset/img/review-person.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">James Carter</h5>
                    <p>Screenwriter</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">I had an amazing time at Reel Craft Academy. The hands-on approach and creative environment helped me improve my skills quickly.</p>
                    </div>
                </div>
            </div>
        </div>
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
@endsection
 