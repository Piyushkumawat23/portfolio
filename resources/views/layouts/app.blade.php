<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Favicon Icon -->
    <link rel="icon" href="assets/img/favicon.png">
    <!-- Site Title -->
    <title>Portm - </title>
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/odometer-theme-default.css">
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="cs_preloader cs_center">
        <div class="cs_preloader_in"></div>
    </div>
    <!-- Start Header Section -->
    <header class="cs_site_header cs_style_1 cs_sticky_header">
        <div class="cs_main_header">
            <div class="container">
                <div class="cs_main_header_in">
                    <div class="cs_main_header_left">
                        <a class="cs_site_branding" href="index">
              <img src="assets/img/logo.svg" alt="Logo">
            </a>
                    </div>
                    <div class="cs_main_header_center">
                        <div class="cs_nav">
                            <ul class="cs_nav_list">
                                <li class="menu-item-has-children"><a href="index">Home</a>
                                    {{-- <ul>
                                        <li><a href="index.html">Designer Landing</a></li>
                                        <li><a href="home-v2.html">Developer Landing</a></li>
                                    </ul> --}}
                                </li>
                                <li class="menu-item-has-children"><a href="about">About</a>
                                    {{-- <ul>
                                        <li><a href="about.html">Designer About</a></li>
                                        <li><a href="about-v2.html">Developer About</a></li>
                                    </ul> --}}
                                </li>
                                <li class="menu-item-has-children"><a href="portfolio">Portfolio</a>
                                    <ul>
                                        <li><a href="portfolio">Portfolio</a></li>
                                        <li><a href="portfolio-details">Portfolio Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="">Pages</a>
                                    <ul>
                                        <li><a href="testimonial">Testimonial</a></li>
                                        <li><a href="faq">FAQ</a></li>
                                        <li><a href="error">Error 404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="">Blog</a>
                                    <ul>
                                        <li><a href="blog">Blog</a></li>
                                        <li><a href="blog-details">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li> <a href="contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="cs_main_header_right">
                        <a href="contact" class="cs_btn cs_style_1 cs_primary_font"><span>Hire Me</span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Content Section -->
    @yield('content')

    <!-- Footer -->
    <footer>
        @yield('footer')
    </footer>

    <!-- Main content inside end-->

  <!-- Start Footer -->
  <footer class="cs_footer cs_style_1 cs_filled_bg position-relative" data-src="assets/img/bg/footer_bg.svg">
    <div class="position-absolute cs_footer_shape_1">
      <img src="assets/img/footer_shape.svg" alt="">
    </div>
    <div class="container">
      <div class="cs_footer_cta">
        <h2 class="cs_font_92 cs_gradient_text_2 cs_semi_bold">Have a project?</h2>
        <a href="contact" class="cs_btn cs_style_1 cs_primary_font"><span>Let’s
            Talk</span></a>
      </div>
      <div class="cs_copyright">© 2025 <a href="mailto:piyushkumawat90607@gmail.com">Piyush Kumawat</a>. All rights reserved.</div>

    </div>
  </footer>
  <!-- End Footer -->

  <!-- Script -->
  <script src="assets/js/plugins/jquery-3.6.0.min.js"></script>
  <script src="assets/js/plugins/gsap.min.js"></script>
  <script src="assets/js/plugins/isotope.pkg.min.js"></script>
  <script src="assets/js/plugins/odometer.min.js"></script>
  <script src="assets/js/plugins/wow.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>