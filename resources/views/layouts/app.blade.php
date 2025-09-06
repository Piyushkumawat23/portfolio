<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Piyush">
    <meta name="language" content="English">
    {{-- <title>Piyush - Index</title>  --}}
    <meta name="description" content="I'm Piyush, a Laravel and PHP backend developer specializing in MVC, MySQL, and API integration.">
    <meta name="keywords" content="Piyush, Laravel Developer, PHP Developer, Backend Developer, MVC, REST API, MySQL, Web Development">

      <!-- Open Graph Tags -->
    <meta property="og:title" content="Piyush - PHP & Laravel Backend Developer" />
    <meta property="og:description" content="I’m Piyush, a backend developer specializing in Laravel, MVC, and API development." />
    <meta property="og:image" content="{{ asset('/public/assets/img/hero/hero_1.png') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta name="theme-color" content="#0e0e0e">


    <!-- Twitter Cards -->
    {{-- <meta name="twitter:card" content="summary_large_image"> --}}
    <meta name="twitter:title" content="Piyush - Laravel Developer">
    <meta name="twitter:description" content="Experienced in Laravel, MVC architecture, and REST APIs.">
    {{-- <meta name="twitter:image" content="{{ asset('/public/assets/img/hero/hero_1.png') }}"> --}}


    {{-- <link rel="canonical" href="https://piyushkumawat.in/" /> --}}

    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="alternate" hreflang="en" href="{{ url()->current() }}" />    
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('public/assets/img/p.png') }}">
    
    <!-- Site Title -->
    {{-- <title>Piyush - </title> --}}
    {{-- <title>Piyush - {{ ucfirst(request()->route()->getName()) }}</title> --}}
    <title>Piyush - {{ ucfirst(request()->route()->getName() ?? 'Home') }}</title>
    
    
      <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/odometer-theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/development.css') }}">

    {{-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> --}}
      <!-- Schema JSON-LD -->

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Person",
          "name": "Piyush",
          "url": "{{ url('/') }}",
          "jobTitle": "PHP & Laravel Backend Developer",
          "worksFor": {
            "@type": "Organization",
            "name": "Freelance"
          },
          "sameAs": [
            "https://github.com/Piyushkumawat23",
            "https://linkedin.com/in/piyush-kumawat-3aaa34227",
            "https://x.com/Piyush__Kumawat"
          ],
          "image": "{{ asset('/public/assets/img/hero/hero_1.png') }}",
          "description": "I’m a backend developer specializing in Laravel, MVC architecture, and API development."
        }
        </script>

        
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
                        <a class="cs_site_branding" href="{{ url('/') }}">
                            <img src="{{ asset('/public/assets/img/logo.png') }}" alt="Logo">
                            {{-- <img src="{{ asset('/public/assets/img/logo2.png') }}" alt="Logo"> --}}
                        </a>
                        
                    </div>
                    <div class="cs_main_header_center">
                        <div class="cs_nav">
                            <ul class="cs_nav_list">
                                <li class="menu-item-has-children"><a href="{{ url('/') }}">Home</a>
                                    {{-- <ul>
                                        <li><a href="index.html">Designer Landing</a></li>
                                        <li><a href="home-v2.html">Developer Landing</a></li>
                                    </ul> --}}
                                </li>
                                <li class="menu-item-has-children"><a href="{{ url('/about') }}">About</a>
                                    {{-- <ul>
                                        <li><a href="about.html">Designer About</a></li>
                                        <li><a href="about-v2.html">Developer About</a></li>
                                    </ul> --}}
                                </li>
                                <li class="menu-item-has-children"><a href="{{ url('/portfolio') }}">Portfolio</a>
                                    {{-- <ul>
                                        <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                                        <li><a href="{{ url('/portfolio-details') }}">Portfolio Details</a></li>
                                    </ul> --}}
                                </li>
                                <li class="menu-item-has-children"><a href="{{ url('/testimonial') }}">Pages</a>
                                    <ul>
                                        <li><a href="{{ url('/testimonial') }}">Testimonial</a></li>
                                        <li><a href="{{ url('/faq') }}">FAQ</a></li>
                                        <li><a href="{{ url('/error') }}">Error 404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="{{ url('/blog') }}">Blog</a>
                                    <ul>
                                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                                        <li><a href="{{ url('/blog-details') }}">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li> <a href="{{ url('/contact') }}">Contact</a></li>
                                {{-- <li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="cs_main_header_right">
                        <a href="{{ url('/contact') }}" class="cs_btn cs_style_1 cs_primary_font"><span>Hire Me</span></a>
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
  <footer class="cs_footer cs_style_1 cs_filled_bg position-relative" 
    data-src="{{ asset('public/assets/img/bg/footer_bg.svg') }}">

    <div class="position-absolute cs_footer_shape_1">
        <img src="{{ asset('/public/assets/img/footer_shape.svg') }}" alt="">

    </div>
    <div class="container">
      <div class="cs_footer_cta">
        <h2 class="cs_font_92 cs_gradient_text_2 cs_semi_bold">Have a project?</h2>
        <a href="{{ url('/contact') }}" class="cs_btn cs_style_1 cs_primary_font"><span>Let’s
            Talk</span></a>
      </div>

      <div class="cs_footer_links" style="margin-top: 20px; text-align: center;">
        <a href="{{ url('/privacy-policy') }}" style="margin: 0 15px; color: #ffffff; text-decoration: underline;">Privacy Policy</a>
        <a href="{{ url('/refund-policy') }}" style="margin: 0 15px; color: #ffffff; text-decoration: underline;">Return & Refund Policy</a>
        <a href="{{ url('/terms-conditions') }}" style="margin: 0 15px; color: #ffffff; text-decoration: underline;">Terms & Conditions</a>
      </div>
      
      <div class="cs_copyright"  style="margin-top: 15px;">© 2025 <a href="mailto:piyushkumawat90607@gmail.com">Piyush Kumawat</a>. All rights reserved.</div>

    </div>
  </footer>
  <!-- End Footer -->

  <!-- Script -->
  <script src="{{ asset('public/assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/gsap.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/isotope.pkg.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/odometer.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/wow.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


  <script>
    // Typing effect for "Kumawat" -> changing to different titles
    var typedName = new Typed("#typed-name", {
        strings: ["Kumawat", "Developer", "Coder", "Programmer"],
        typeSpeed: 60,
        backSpeed: 40,
        backDelay: 1000,
        startDelay: 500,
        loop: true
    });

    // Typing effect for title below
    var typedTitle = new Typed("#typed-title", {
        strings: ["Full-stack Web Developer", "Frontend Developer", "Backend Developer","MYSQL Developer"],
        typeSpeed: 50,
        backSpeed: 30,
        backDelay: 1000,
        startDelay: 1000,
        loop: true
    });
</script>
  
</body>
</html>