<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Yummy Restaurant</title>
    <meta name="description" content="Yummy Restaurant">
    <meta name="keywords" content="Yummy Restaurant">

    <!-- Favicons -->
    <link href="{{ asset('frontend') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('frontend') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('frontend') }}/css/main.css" rel="stylesheet">

    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <div class="swal" data-swal="{{ session('success') }}"></div>
    <div class="swalError" data-swal="{{ session('error') }}"></div>

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('login') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{ asset('frontend') }}/img/logo.png" alt=""> -->
                <h1 class="sitename">Yummy</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#chefs">Chefs</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="#" data-bs-toggle="modal" data-bs-target="#modalBook">Book a Table</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <div class="container">
                <div class="row gy-4 justify-content-center justify-content-lg-between">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h1>
                        <p data-aos="fade-up" data-aos-delay="100">Yummy Restaurant offers a delightful dining experience, blending exquisite flavors with fresh ingredients.</p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="#book-a-table" class="btn-get-started">Welcome!</a>
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="{{ asset('frontend') }}/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About Us<br></h2>
                <p><span>Learn More</span> <span class="description-title">About Us</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('frontend') }}/img/about.jpg" class="img-fluid mb-4" alt="">
                        <div class="book-a-table">
                            <h3>Book a Table</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
                        <div class="content ps-0 ps-lg-5">
                            <h3>Welcome to Yummy Restaurant!</h3>
                            <p class="fst-italic">
                                Discover the perfect blend of taste and ambiance at our modern, cozy dining spot.
                                Whether you're joining us for a quick meal or celebrating a special occasion, we promise
                                an unforgettable culinary experience.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span><b>Delicious Menus: </b>Handcrafted dishes using the freshest ingredients.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span><b>Beautiful Locations: </b>Enjoy our bright, airy athmosphere with natural light and stylish decor.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span><b>Catering for Events: </b>Host your next gathering in our elegant space or book a table for a more intimate experience.</span></li>
                            </ul>
                            <p>
                                Book a table now and indulge in a dining experience like no other!
                            </p>

                            <div class="position-relative mt-4">
                                <img src="{{ asset('frontend') }}/img/about-2.jpg" class="img-fluid" alt="">
                                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                    class="glightbox pulsating-play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Why Us Section -->
        <section id="why-us" class="why-us section light-background">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="why-box">
                            <h3>Why Choose Yummy</h3>
                            <p>
                                Experience gourmet cuisine without the hefty price tag. Yummy Restaurant offers exceptional value for the quality and service, ensuring that great food is accessible to everyone.
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn"><span>Learn More</span> <i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                            <div class="col-xl-4">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-clipboard-data"></i>
                                    <h4>Customize Events</h4>
                                    <p>We offer flexible event packages and customized services, making it easy to host anything from intimate gatherings to larger celebrations in style.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-gem"></i>
                                    <h4>Inviting Atmosphere</h4>
                                    <p>With modern decor, natural lighting, and comfortable seating, Yummy provides the perfect setting for any occasion—be it a romantic dinner, a family outing, or a business meeting.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-inboxes"></i>
                                    <h4>Creative Menu</h4>
                                    <p>Our diverse menu features both local and international flavors, with something for everyone, whether you're in the mood for classic comfort food or something more adventurous.
                                    </p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Why Us Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section dark-background">

            <img src="{{ asset('frontend') }}/img/stats-bg.jpg" alt="" data-aos="fade-in">

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Workers</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        {{-- menu section --}}
        @include('frontend._menu')

        {{-- Testimonials Section --}}
        @include('frontend._viewreview')

        {{-- event section --}}
        @include('frontend._event')

        {{-- chef section --}}
        @include('frontend._chef')

        {{-- review section --}}
        @include('frontend._review')

        {{-- image section --}}
        @include('frontend._image')

        {{-- contact section --}}
        @include('frontend._contact')

        {{-- modal book --}}
        @include('frontend._modal-book')

    </main>

    <footer id="footer" class="footer dark-background">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div class="address">
                        <h4>Address</h4>
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p></p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Contact</h4>
                        <p>
                            <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
                            <strong>Email:</strong> <span>yummyrestaurant@gmail</span><br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
                            <strong>Sunday</strong>: <span>Closed</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Yummy</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('frontend') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('frontend') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('frontend') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('frontend') }}/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('frontend') }}/js/main.js"></script>

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    {{-- sweet alert --}}
    <script>
      const swal = $('.swal').data('swal');

      if (swal) {
          Swal.fire({
              title: 'Success!',
              text: swal,
              icon: 'success',
              timer: 2500,
              showConfirmButton: false
          })
      }

      const swalError = $('.swalError').data('swal');

      if (swalError) {
          Swal.fire({
              title: 'Error!',
              text: swalError,
              icon: 'error',
              timer: 2500,
              showConfirmButton: false
          })
      }
  </script>

</body>

</html>
