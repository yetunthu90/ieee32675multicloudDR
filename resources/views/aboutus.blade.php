@extends('layouts.app') <!-- Extend the layout -->

@section('title', 'About Us Page') <!-- Define a title for this page -->

@section('content') <!-- Define the content section -->

 <!-- Header Start -->
 <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <div class="untree_co-section">
        <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h6 class="section-title bg-white text-center text-primary px-3">Learning Stories</h6>
                <h1 class="mb-5">Master Video Editing with Us!</h1>
            <p>Transform your creativity into stunning visuals. Learn from the best to become a pro video editor.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature">
                <h3>Editing Basics</h3>
                <p>Learn the fundamentals of video editing, including timelines, trimming, and transitions.</p>
            </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature">
                <h3>Color Grading</h3>
                <p>Master the art of color correction and grading to bring your visuals to life.</p>
            </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="feature">
                <h3>Advanced Effects</h3>
                <p>Explore advanced techniques, including visual effects, animations, and motion graphics.</p>
            </div>
            </div>


            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay=100">
            <div class="feature">
                <h3>Audio Editing</h3>
                <p>Learn how to sync audio, remove noise, and add sound effects for professional results.</p>
            </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature">
                <h3>Software Tutorials</h3>
                <p>Step-by-step guides on popular editing tools like Adobe Premiere, Final Cut Pro, and DaVinci Resolve.</p>
            </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="feature">
                <h3>Storyboarding</h3>
                <p>Understand the importance of planning and storyboarding for seamless storytelling.</p>
            </div>
            </div>
        </div>
        </div> <!-- /.container -->
    </div> <!-- /.untree_co-section -->
  <!-- <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
        <h1 class="mb-5 mt-5">The Right Course For You...!</h1>
          <p>Our Movie Making Course offers everything you need to become a filmmaker. Learn scriptwriting, cinematography, editing, and sound design through expert guidance and hands-on projects. Whether you're a beginner or looking to refine your skills, this course helps bring your creative vision to life and advance your filmmaking journey.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="asset/img/about-a.jpg" alt="Image" class="img-fluid" style="height: 250px;"></a>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>Basic Video Editing</h3>
              <p class="mb-4">Learn the fundamentals of video editing, including timeline management, basic transitions, and essential tools.</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">$87.00</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="asset/img/about-b.jpg" alt="Image" class="img-fluid" style="height: 250px;"></a>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>Advanced Editing Techniques</h3>
              <p class="mb-4">Enhance your editing skills with advanced transitions, color grading, and sound design techniques.</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">$93.00</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="asset/img/about-c.jpeg" alt="Image" class="img-fluid" style="height: 250px;"></a>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>Special Effects Masterclass</h3>
              <p class="mb-4">Dive into the world of special effects, motion graphics, and green screen techniques for cinematic results.</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">$65.00</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div class="untree_co-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h1 class="mb-5 mt-5">The Right Course For You...!</h1>
                <p>Our Movie Making Course offers everything you need to become a filmmaker. Learn scriptwriting, cinematography, editing, and sound design through expert guidance and hands-on projects. Whether you're a beginner or looking to refine your skills, this course helps bring your creative vision to life and advance your filmmaking journey.</p>
            </div>
        </div>
        <div class="row justify-content-center">
        @foreach($courses as $course)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0 d-flex">
                <div class="custom-media w-100 d-flex flex-column">
                    <!-- Use the same static images -->
                    <a href="#">
                        @php
                            $imageIndex = ($loop->index % 3) + 1; // Cycle through 1, 2, 3
                            $imagePath = "asset/img/about-" . ($imageIndex == 1 ? 'a' : ($imageIndex == 2 ? 'b' : 'c')) . ($imageIndex == 3 ? '.jpeg' : '.jpg');
                        @endphp
                        <img src="{{ asset($imagePath) }}" alt="{{ $course->course_name }}" class="img-fluid" style="height: 250px;">
                    </a>
                    <div class="custom-media-body d-flex flex-column flex-grow-1">
                        <!-- Dynamically fetch course title -->
                        <h3>{{ $course->course_name }}</h3>
                        <!-- Static description (replace with dynamic if needed) -->
                        <p class="mb-4 flex-grow-1 " style= "text-align: justify;">{{ $course->description }}</p>
                        <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                            <!-- Dynamically fetch course price -->
                            <div>
                                <span class="price">${{ number_format($course->price, 2) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
</div>
    </div>
</div>
  <div class="untree_co-section mt-5">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 mb-5">
        <h6 class="section-title bg-white text-center text-primary px-3">Learning Stories</h6>
        <h1 class="mb-5">Unleashing Creativity Through Film and Media Excellence</h1>
          <p data-aos="fade-up" data-aos-delay="100" style="text-align:justify;">Reelcraft Academy provides hands-on training in film and media production, equipping aspiring filmmakers, writers, and creators with the skills needed to succeed. Our curriculum covers scriptwriting, cinematography, editing, and post-production, guided by industry experts. Students gain real-world experience through projects, workshops, and internships, with certification and career support. We foster a creative environment to help creatives thrive in storytelling.</p>
          <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>Covers all aspects of filmmaking</li>
            <li>Learn from industry experts</li>
            <li>Earn a recognized certificate</li>
          </ul>

          <div class="row count-numbers mb-5">
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
              <span class="counter d-block"><span data-number="15023">0</span><span>+</span></span>
              <span class="caption-2">No. Students</span>
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <span class="counter d-block"><span data-number="49">0</span><span></span></span>
              <span class="caption-2">No. Teachers</span>
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <span class="counter d-block"><span data-number="13">0</span><span></span></span>
              <span class="caption-2">No. Awards</span>
            </div>
          </div>

          <p data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('join_now') }}" class="btn btn-primary mr-1">Admission</a>
          </p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="bg-1 mt-5"></div>
            <img src="asset\img\aboutustwo.jpg" alt="Image" class="img-fluid rounded">
          </a>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
        <h1 class="mb-5 mt-5">Movie School News</h1>
          <p>Variety of courses are designed for filmmakers to understand the craft of acting, enabling better direction and communication with actors during film production.</p>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="100">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="asset/img/about_one.jpg" alt="Image">
            </figure>
            <div class="media-h-body">
              <h2 class="mb-3"><a href="#">Film Appreciation and Analysis</a></h2>
              <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>Jan 22, 2025</span>  <span class="icon-person mr-2"></span>Admin</div>
              <p>Develop a deeper understanding of cinematic techniques, genres, and iconic films by analyzing them critically.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="200">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="asset/img/about_two.jpg" alt="Image">
            </figure>
            <div class="media-h-body">
              <h2 class="mb-3"><a href="#">Visual Effects (VFX) for Beginners</a></h2>
              <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span>  <span class="icon-person mr-2"></span>Admin</div>
              <p>An introduction to adding special effects to your films using tools like After Effects or Blender, enhancing your storytelling.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->
  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
        <h6 class="section-title bg-white text-center text-primary px-3 mt-5">Pricings</h6>
        <h1 class="mb-5">We Have Best Education!</h1>
          <p> Our programs combine practical expertise with industry insights, ensuring students master the craft and succeed in the competitive world of visual storytelling. Join us to transform your passion for film into a career-ready skillset.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="00">
          <div class="pricing">
            <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-1.png" alt="Image" class="img-fluid"></div> -->
            <div class="pricing-body">

              <h3 class="pricing-plan-title">Starter</h3>
              <div class="price"><span class="fig">$50.99</span><span>/month</span></div>
              <p class="mb-4" style="text-align: justify;"> The Starter plan is designed for individuals or small businesses looking for essential features at an affordable price. It provides access to basic tools and services, making it ideal for those just starting out or with minimal requirements. The plan includes all the necessary features to get started, ensuring a smooth and cost-effective entry into the service.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing">
            <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-2.png" alt="Image" class="img-fluid"></div> -->
            <div class="pricing-body">

              <h3 class="pricing-plan-title">Business</h3>
              <div class="price"><span class="fig">$99.99</span><span>/month</span></div>
              <p class="mb-4" style="text-align: justify;">The Business plan is tailored for growing businesses or professionals who need more advanced features and capabilities. This plan offers enhanced tools and services to support scalability, productivity, and efficiency. It’s perfect for businesses looking to expand their operations and take advantage of additional resources to meet their goals.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="pricing">
            <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-3.png" alt="Image" class="img-fluid"></div> -->
            <div class="pricing-body">

              <h3 class="pricing-plan-title">Premium</h3>
              <div class="price"><span class="fig">$199.99</span><span>/month</span></div>
              <p class="mb-4" style="text-align: justify;">The Premium plan is the top-tier offering, designed for large businesses or users with high-demand needs. It includes all the features of the Starter and Business plans, along with exclusive tools, priority support, and advanced functionalities. This plan is ideal for those seeking the highest level of service, performance, and customization.</p>
            </div>
          </div>
        </div>
      </div>     
    </div>
  </div> <!-- /.untree_co-section -->
  

  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 mr-auto mb-5 mb-lg-0 mt-5"  data-aos="fade-up" data-aos-delay="0">
          <img src="asset/img/why_choose_a.jpg" alt="image" class="img-fluid mt-5">
        </div>
        <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
        <h6 class="section-title bg-white text-center text-primary px-3 mt-5">Why Choose Us</h6>
        <h1 class="mb-5">Best in the class!</h1>
          <p style="text-align: justify;">Our application stands out for its user-friendly interface, robust features, and seamless performance. We’ve designed it with your needs in mind, offering intuitive functionality that saves you time and enhances productivity. Whether you're looking for advanced features, reliable security, or consistent updates, our app provides a complete solution that grows with you. Choose our application for a smooth, efficient experience and the support you deserve.</p>

          <div class="custom-accordion" id="accordion_1">
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Good Teachers and Staffs</button>
              </h2>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="asset/img/why_choose_b.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div style="margin-left:10px;">
                      <p>Our teachers and staff are the heart of our community. Their dedication, passion, and commitment to excellence create a supportive and inspiring environment where students thrive.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">We Value Our Customers</button>
              </h2>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="asset/img/why_choose_c.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div style="margin-left:10px;">
                      <p>At the core of everything we do is a deep respect for our customers. We are committed to providing exceptional service, listening to your needs, and delivering solutions that exceed expectations.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">High Quality Projects</button>
              </h2>

              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="asset/img/why_choose_d.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div style="margin-left:10px;">
                      <p >We take pride in delivering high-quality projects that meet the highest standards of excellence. Each project is carefully planned, executed, and tested to ensure it not only meets but exceeds expectations.</p>
                    </div>
                  </div>

                </div>
              </div>

            </div> <!-- .accordion-item -->

          </div>

        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

    <script src="asset/about-us/js/jquery-3.4.1.min.js"></script>
    <script src="asset/about-us/js/popper.min.js"></script>
    <script src="asset/about-us/js/bootstrap.min.js"></script>
    <script src="asset/about-us/js/owl.carousel.min.js"></script>
    <script src="asset/about-us/js/jquery.animateNumber.min.js"></script>
    <script src="asset/about-us/js/jquery.waypoints.min.js"></script>
    <script src="asset/about-us/js/jquery.fancybox.min.js"></script>
    <script src="asset/about-us/js/jquery.sticky.js"></script>
    <script src="asset/about-us/js/aos.js"></script>
    <script src="asset/about-us/js/custom.js"></script>

    @endsection
