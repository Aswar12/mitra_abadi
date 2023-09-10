<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PT. Mitra Abadi Distribusindo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('assets-wel/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets-wel/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets-wel/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-wel/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-wel/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-wel/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-wel/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-wel/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets-wel/css/style.css') }}" rel="stylesheet">

</head>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        @if (Route::has('login'))
        <h3 class="logo"><a href="#">PT. Mitra Abadi Distribusindo</a></h3>
        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    @auth
                    <a class="nav-link scrollto active" href="{{ url('/dashboard') }}">DASHBOARD</a>
                </li>
                <li>
                    @else
                    <a class="nav-link scrollto" href="{{ route('login') }}">LOGIN</a>
                </li>
                <li>
                    @if (Route::has('register'))
                    <a class="nav-link scrollto" href="{{ route('register') }}">REGISTER</a>
                    @endif
                    @endauth
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        @endif


    </div>
</header><!-- End Header -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('assets-wel/img/slide/slide-1.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">PT. Mitra Abadi Distribusindo</h2>
                            <p class="animate__animated animate__fadeInUp">Jl. Lalu Mesir No.8a, Cakranegara Sel. Baru, Kec. Cakranegara, Kota Mataram, Nusa Tenggara Bar. 83232, Indonesia</p>
                            {{-- <div>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('assets-wel/img/slide/2023-05-12.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">PT. Mitra Abadi Distribusindo</h2>
                            <p class="animate__animated animate__fadeInUp">Mitra Abadi Distribusindo terdaftar di Kota Kupang Indonesia. Itu diterbitkan dalam Berita Negara pada 2016 dengan BN 41 TBN 8628. Alamat perusahaan yang terdaftar: Jl. Lalu Mesir No.8A Abian Tubuh, Mataram-Nusa Tenggara Barat.</p>
                            {{-- <div>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                {{--  --}}

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</section><!-- End Hero -->


<!-- ======= Clients Section ======= -->
<!-- <section id="clients" class="clients section-bg">
<div class="container">

<div class="row">

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
</div>

</div>

</div>
</section>End Clients Section -->

</main><!-- End #main -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets-wel/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets-wel/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets-wel/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets-wel/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets-wel/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets-wel/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets-wel/js/main.js') }}"></script>

</body>

</html>