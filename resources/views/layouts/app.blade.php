<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Piyush">
    <meta name="language" content="English">

    <!-- Dynamic Title -->
    <title>@yield('title', 'Piyush - Laravel & PHP Backend Developer')</title>

    <!-- Dynamic Meta Description -->
    <meta name="description" content="@yield('meta_description', 'I\'m Piyush, a Laravel and PHP backend developer specializing in MVC, MySQL, and API integration.')">

    <!-- Dynamic Meta Keywords -->
    <meta name="keywords" content="@yield('meta_keywords', 'Piyush, Laravel Developer, PHP Developer, Backend Developer, MVC, REST API, MySQL, Web Development')">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="@yield('og_title', 'Piyush - PHP & Laravel Backend Developer')" />
    <meta property="og:description" content="@yield('og_description', 'I’m Piyush, a backend developer specializing in Laravel, MVC, and API development.')" />
    <meta property="og:image" content="@yield('og_image', asset('/public/assets/img/hero/hero_1.png'))" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta name="theme-color" content="#0e0e0e">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Piyush - Laravel Developer')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Experienced in Laravel, MVC architecture, and REST APIs.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('/public/assets/img/hero/hero_1.png'))">

    <!-- Canonical and Alternate -->
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="alternate" hreflang="en" href="{{ url()->current() }}" />


    <meta name="msvalidate.01" content="74994E9B26F8A392675172E86F79431B" />


    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/assets/img/p.png') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/odometer-theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">

    <!-- JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- Schema Markup -->
   <!-- Person Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Piyush Kumawat",
    "alternateName": "Piyush",
    "url": "https://piyushkumawat.in",
    "image": "https://piyushkumawat.in/public/assets/img/hero/hero_1.png",
    "jobTitle": "Full Stack Web Developer (Laravel & PHP Specialist)",
    "worksFor": {
        "@type": "Organization",
        "name": "Noventix Web AI Solution",
        "url": "https://piyushkumawat.in",
        "sameAs": [
            "https://piyushkumawat.in"
        ]
    },
    "alumniOf": {
        "@type": "CollegeOrUniversity",
        "name": "Sri Balaji PG Mahavidyalaya, Jaipur",
        "sameAs": "https://sbpgm.sbss.ac.in/"
    },
    "description": "Piyush Kumawat is a Laravel and PHP backend developer with expertise in building scalable web applications, APIs, and MySQL-based systems. He offers freelance and agency-based services under the brand Noventix Web AI Solution.",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Rajasthan",
        "addressRegion": "RJ",
        "postalCode": "302012",
        "addressCountry": "India"
    },
    "email": "mailto:piyushkumawat90607@gmail.com",
    "telephone": "+91-9782870390",
    "knowsAbout": [
        "Laravel",
        "PHP",
        "MySQL",
        "API Integration",
        "Backend Architecture",
        "REST APIs",
        "JavaScript",
        "Web Development",
        "Freelance Projects"
    ],
    "sameAs": [
        "https://github.com/Piyushkumawat23",
        "https://www.linkedin.com/in/piyush-kumawat-laravel",
        "https://www.instagram.com/piyushkumawat_23",
        "https://piyushkumawat.in"
    ]
}
</script>

<!-- WebSite Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Piyush Kumawat",
    "url": "https://piyushkumawat.in"
}
</script>
<script>
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i+"?ref=bwt";
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "sj8azrkz69");
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
                                        {{-- <li><a href="{{ url('/error') }}">Error 404</a></li> --}}
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