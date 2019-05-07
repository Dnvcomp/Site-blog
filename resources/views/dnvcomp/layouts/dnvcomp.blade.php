<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset(env('DNVCOMP')) }}/img/logos/logo-shortcut.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset(env('DNVCOMP')) }}/css/bootstrap.min.css">
    <!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset(env('DNVCOMP')) }}/css/font-awesome.css">
    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="{{ asset(env('DNVCOMP')) }}/css/icomoon.css">
    <!-- Pogo Slider -->
    <link rel="stylesheet" href="{{ asset(env('DNVCOMP')) }}/css/pogo-slider.min.css">
    <link rel="stylesheet" href="{{ asset(env('DNVCOMP')) }}/css/slider.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset(env('DNVCOMP')) }}/css/animate.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset(env('DNVCOMP')) }}/css/owl.carousel.css">
    <!-- Main Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset(env('DNVCOMP')) }}/css/default.css">
    <link rel="stylesheet" type="text/css" href="{{ asset(env('DNVCOMP')) }}/css/styles.css">
    <!-- Fonts Google -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&amp;subset=latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
<!-- Preloader Start-->
<div id="preloader">
    <div class="row loader">
        <div class="loader-icon"></div>
    </div>
</div>
<!-- // Preloader -->

<!-- Top-Bar -->
@yield('topBar')
<!-- // Top-Bar -->

<!-- Navbar -->
@yield('navigation')
<!-- // Navbar -->

<!-- Slider -->
@yield('slider')
<!-- // Slider -->

<!-- Blog post-->
@yield('content')
<!-- // Blog post -->

<!-- Members -->
@yield('members')
<!-- // Members -->

<!-- Footer -->
@yield('footer')
<!-- // Footer -->

<!-- Scroll to top button Start -->
<a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<!-- Scroll to top button End -->

<!-- Jquery -->
<script src="{{ asset(env('DNVCOMP')) }}/js/jquery.min.js"></script>
<!-- Bootstrap JS-->
<script src="{{ asset(env('DNVCOMP')) }}/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Pogo Slider -->
<script src="{{ asset(env('DNVCOMP')) }}/js/jquery.pogo-slider.min.js"></script>
<script src="{{ asset(env('DNVCOMP')) }}/js/pogo-main.js"></script>
<!-- Owl Carousel-->
<script src="{{ asset(env('DNVCOMP')) }}/js/owl.carousel.js"></script>
<!-- Wow JS -->
<script type="text/javascript" src="{{ asset(env('DNVCOMP')) }}/js/wow.min.js"></script>
<!-- Countup -->
<script src="{{ asset(env('DNVCOMP')) }}/js/jquery.counterup.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!-- Isotop -->
<script type="text/javascript" src="{{ asset(env('DNVCOMP')) }}/js/isotope.pkgd.min.js"></script>
<!-- Tabs -->
<script type="text/javascript" src="{{ asset(env('DNVCOMP')) }}/js/tabs.min.js"></script>
<!-- Modernizr -->
<script src="{{ asset(env('DNVCOMP')) }}/js/modernizr.js"></script>
<!-- Main JS -->
<script src="{{ asset(env('DNVCOMP')) }}/js/main.js"></script>

</body>
</html>