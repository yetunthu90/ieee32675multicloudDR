@extends('layouts.app') <!-- Extend the layout -->

@section('title', 'Contact Us Page') <!-- Define a title for this page -->

@section('content') <!-- Define the content section -->

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header-level_one">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
      <!-- About Start -->
      <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="asset\img\level1.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Course Directory</h6>
                    <h1 class="mb-4">Explore Our Comprehensive Film and Media Courses</h1>
                    <p class="mb-4" style="text-align: justify;">At Reelcraft Academy, we offer a diverse range of courses tailored to equip aspiring creators with the skills and knowledge needed to excel in the world of film and media. Our programs cover every stage of the creative process, from conceptualizing stories to mastering advanced post-production techniques. Whether you’re a beginner or an experienced professional looking to enhance your expertise, our courses are designed to suit all levels of learning.</p>
                        <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa fa-plus-square text-primary me-2"></i>Animation</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa fa-plus-square text-primary me-2"></i>Film Directing</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-plus-square text-primary me-2"></i>Cinematography</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-plus-square text-primary me-2"></i>Digital Content Creation</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-plus-square text-primary me-2"></i>Visual Effects (VFX)</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-plus-square text-primary me-2"></i>Production Management</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
     <!-- Courses Section -->
     <section id="courses" class="courses section">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
            <h1 class="mb-5">Courses Categories</h1>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="course-item">
                    <img src="asset/img/course-1.jpg" class="img-fluid" alt="...">
                    <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="category">Cinematography Basics</p>
                        <p class="price">$169</p>
                    </div>

                    <h3><a href="course-details.html">Website Design</a></h3>
                    <p class="description">Explore the art of visual storytelling through camera work, lighting techniques, and shot composition to enhance your filmmaking skills.</p>
                    <div class="trainer d-flex justify-content-between align-items-center">
                        <div class="trainer-profile d-flex align-items-center">
                        <img src="asset/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                        <a href="" class="trainer-link">Antonio</a>
                        </div>
                        <div class="trainer-rank d-flex align-items-center">
                        <i class="bi bi-person user-icon"></i>&nbsp;50
                        &nbsp;&nbsp;
                        <i class="bi bi-heart heart-icon"></i>&nbsp;65
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="course-item">
                <img src="asset/img/course-2.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="category">Marketing</p>
                    <p class="price">$250</p>
                </div>

                <h3><a href="course-details.html">Film Editing Techniques</a></h3>
                <p class="description">Understand the fundamentals of video editing using software like Adobe Premiere Pro or Final Cut. Learn to cut, transition, and color-grade your footage.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                    <img src="asset/img/trainers/trainer-2-2.jpg" class="img-fluid" alt="">
                    <a href="" class="trainer-link">Lana</a>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;42
                    </div>
                </div>
                </div>
            </div>
            </div> <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="course-item">
                <img src="asset/img/course-3.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="category">Marketing</p>
                    <p class="price">$250</p>
                </div>

                <h3><a href="course-details.html">Sound Design and Audio Editing</a></h3>
                <p class="description">Discover the role of sound in cinema, including recording, editing, and mixing to create an immersive audio experience.
                </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                    <img src="asset/img/trainers/trainer-3-2.jpg" class="img-fluid" alt="">
                    <a href="" class="trainer-link">Brandon</a>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;85
                    </div>
                </div>
                </div>
            </div>
            </div> <!-- End Course Item-->

        </div>
        </div>

     </section><!-- /Courses Section -->
@endsection
