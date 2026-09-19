<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0, user-scalable=0" name="viewport"/>
    
    <title>@yield('meta_title', 'Al-Hijrah Training & Consultancy (AHTC) - Islamic Banking & Finance Specialist')</title>
    <meta name="description" content="@yield('meta_description', 'Al-Hijrah Training & Consultancy (AHTC) is a premier specialist learning and advisory firm dedicated to fostering excellence in Islamic Banking, finance, and organizational evolution.')"/>
    <meta name="keywords" content="@yield('meta_keywords', 'Islamic Banking Training, Islamic Finance Advisory, Shariah Compliance, Executive Leadership, AHTC Malaysia')"/>
    <meta name="robots" content="@yield('meta_robots', 'index, follow')"/>
    <link rel="canonical" href="{{ url()->current() }}"/>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:title" content="@yield('og_title', 'Al-Hijrah Training & Consultancy (AHTC)')"/>
    <meta property="og:description" content="@yield('og_description', 'Premier specialist learning and advisory firm dedicated to fostering excellence in Islamic Banking, finance, and organizational evolution.')"/>
    <meta property="og:image" content="{{ asset('assets/images/Primary-Logo-Trimmed.png') }}"/>

    <!-- Schema.org JSON-LD Structured Data for Organization -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "EducationalOrganization",
      "name": "Al-Hijrah Training & Consultancy",
      "alternateName": "AHTC",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('assets/images/Primary-Logo-Trimmed.png') }}",
      "contactPoint": {
        "@@type": "ContactPoint",
        "telephone": "+60192680787",
        "contactType": "customer service",
        "email": "admin@alhijrahtraining.com",
        "areaServed": "MY",
        "availableLanguage": ["en", "ms"]
      },
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "11-1, 1st Floor, Jalan Putra Mahkota 7/8C, Pusat Bandar Putra Point, Putra Heights",
        "addressLocality": "Subang Jaya",
        "addressRegion": "Selangor",
        "postalCode": "47650",
        "addressCountry": "MY"
      },
      "description": "Premier specialist learning and advisory firm dedicated to fostering excellence in Islamic Banking, finance, and organizational evolution."
    }
    </script>

    <!-- Favicon -->
    <link href="{{ asset('assets/images/AHTC-Favicon.png') }}" rel="icon" type="image/png"/>
    <link href="{{ asset('assets/images/AHTC-Favicon.png') }}" rel="apple-touch-icon"/>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('template2_assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- Line Awesome CSS -->
    <link href="{{ asset('template2_assets/css/line-awesome.min.css') }}" rel="stylesheet"/>
    <!-- Font Awesome CSS CDN Fallback -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('template2_assets/css/fontAwesomePro.css') }}" rel="stylesheet"/>
    <!-- Animate CSS-->
    <link href="{{ asset('template2_assets/css/animate.css') }}" rel="stylesheet"/>
    <!-- Bar Filler CSS -->
    <link href="{{ asset('template2_assets/css/barfiller.css') }}" rel="stylesheet"/>
    <!-- Magnific Popup Video -->
    <link href="{{ asset('template2_assets/css/magnific-popup.css') }}" rel="stylesheet"/>
    <!-- Flaticon CSS -->
    <link href="{{ asset('template2_assets/css/flaticon.css') }}" rel="stylesheet"/>
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('template2_assets/css/owl.carousel.css') }}" rel="stylesheet"/>
    <!-- Slick Slider CSS -->
    <link href="{{ asset('template2_assets/css/slick.css') }}" rel="stylesheet"/>
    <!-- Nice Select -->
    <link href="{{ asset('template2_assets/css/nice-select.css') }}" rel="stylesheet"/>
    <!-- Back to Top -->
    <link href="{{ asset('template2_assets/css/backToTop.css') }}" rel="stylesheet"/>
    <!-- Style CSS -->
    <link href="{{ asset('template2_assets/css/style.css') }}" rel="stylesheet"/>
    <!-- Responsive CSS -->
    <link href="{{ asset('template2_assets/css/responsive.css') }}" rel="stylesheet"/>
    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
        }
    </style>
</head>
<body class="white-bg">
    <main class="main-wrapper">
        @yield('content')
    </main>

    <!-- jQuery -->
    <script src="{{ asset('template2_assets/js/jquery-1.12.4.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('template2_assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('template2_assets/js/bootstrap.min.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('template2_assets/js/wow.min.js') }}"></script>
    <!-- Way Points JS -->
    <script src="{{ asset('template2_assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- Counter Up JS -->
    <script src="{{ asset('template2_assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('template2_assets/js/owl.carousel.min.js') }}"></script>
    <!-- Slick Slider JS -->
    <script src="{{ asset('template2_assets/js/slick.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('template2_assets/js/magnific-popup.min.js') }}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset('template2_assets/js/isotope-3.0.6-min.js') }}"></script>
    <!-- Sticky JS -->
    <script src="{{ asset('template2_assets/js/jquery.sticky.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('template2_assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Back To Top JS -->
    <script src="{{ asset('template2_assets/js/backToTop.js') }}"></script>
    <!-- Progress Bar JS -->
    <script src="{{ asset('template2_assets/js/jquery.barfiller.js') }}"></script>
    <!-- Circle Progress Bar JS -->
    <script src="{{ asset('template2_assets/js/circle-progress.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('template2_assets/js/main.js') }}"></script>
</body>
</html>
