<!DOCTY html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset(env('DNVCOMP')) }}/img/logos/logo-shortcut.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset(env('DNVCOMP')) }}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset(env('DNVCOMP')) }}/css/bootstrap.min.css.map">
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
@if(count($errors) > 0)
    <div class="box">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@if(session('status'))
    <div class="box">
        {{ session('status') }}
    </div>
@endif

@if(session('error'))
    <div class="box">
        {{ session('error') }}
    </div>
@endif

<div class="wrap_result"></div>
<!-- Blog post-->
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
    <div class="row-{{ isset($bar) ? $bar : 'no' }}">
        @yield('content')
        @yield('bar')
    </div>
</div>
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
<script type="text/javascript" src="{{ asset(env('DNVCOMP')) }}/js/comment-reply.js"></script>
<script type="text/javascript" src="{{ asset(env('DNVCOMP')) }}/js/mycomment.js"></script>
<script src="{{ asset(env('DNVCOMP')) }}/js/ckeditor/ckeditor.js"></script>
<script src="{{ asset(env('DNVCOMP')) }}/js/bootstrap-filestyle.min.js"></script>
</body>
</html>
</body>
</html>