<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SeeU - Sistem Informasi UMKM</title>
    <link rel="shortcut icon" href="/resources/images/Logo/mainLogo.png" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite('resources/sass/app.scss')
    <style>
        .carousel {
            margin-top: 0;
        }

        .custom-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <div class="text-center">

        <div class="col rightContent vh-100">
            @php
                $currentRouteName = Route::currentRouteName();
            @endphp
            <nav class="navbar navbar-expand-md navbar-dark mainColor">
                <div class="container">
                    <a href="" class="navbar-brand mb-0 h1"> <img
                            src="{{ Vite::asset('resources/images/Logo/mainLogo-light-txt.png') }}" width="100px"
                            alt="image" class="d-block w-10 m-auto">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse  justify-content-between" id="navbarSupportedContent">
                        <hr class="d-md-none text-white-50">
                        <ul class="navbar-nav flex-row flex-wrap">
                            <li class="nav-item col-2 col-md-auto"><a href="{{ route('guest') }}"
                                    class="nav-link">HOME</a></li>
                            <li class="nav-item col-2 col-md-auto"><a href="" class="nav-link">ABOUT</a></li>
                            <li class="nav-item col-2 col-md-auto"><a href="" class="nav-link">CONTACT</a></li>
                        </ul>
                        <hr class="d-md-none text-white-50">

                        @if ($currentRouteName == 'guest')
                            <div class="d-flex gap-3">
                                <a id="profileButton" class="btn btn-outline-light my-2 ms-md-auto"
                                    href="{{ route('login') }}">Login</a>
                                <a id="profileButton" class="btn btn-outline-light
my-2 ms-md-auto"
                                    href="{{ route('register') }}">Register</a>
                            </div>
                        @else
                            <a id="profileButton" class="btn btn-outline-light
my-2 ms-md-auto"><i
                                    class="bi-person-circle me-1"></i>Welcome,

                                @if (Auth::check())
                                    {{ Auth::user()->userName }}!
                                @else
                                    Guest!
                                @endif
                            </a>
                        @endif


                    </div>
                </div>
            </nav>
            <!-- header -->
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="{{ Vite::asset('resources/images/vector/1.png') }}" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ Vite::asset('resources/images/vector/2.png') }}" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ Vite::asset('resources/images/vector/3.png') }}" class="d-block w-100"
                            alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- hero -->
            <div class="p-4">
                <h5>CONTOH KATEGORI</h5>
                <div class="card-group">
                    <div class="card" style="width: 400px;">
                        <img src="{{ Vite::asset('resources/images/vector/Bebek-Wachid-Hasyim.jpg') }}"
                            class="card-img-top custom-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bebek Wachid Hasyim</h5>
                            <p class="card-text">Buka - Setiap Hari (16:00 - 22:00) </p>
                            <p class="card-text"><a
                                    href="https://www.google.com/maps/dir//Jl.+Raya+Jemursari+No.17,+Jemur+Wonosari,+Kec.+Wonocolo,+Surabaya,+Jawa+Timur+60237/@-7.327293,112.6508592,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x2dd7fb6a031a447f:0x812c67c328523581!2m2!1d112.7332573!2d-7.3273259?entry=ttu">Jl.
                                    Jemur Andayani No. 17,
                                    Wonocolo, Surabaya</a></p>
                            <p class="card-text"><small class="text-body-secondary">Culinary</small></p>
                        </div>
                    </div>
                    <div class="card" style="width: 400px;">
                        <img src="{{ Vite::asset('resources/images/vector/Prima-Hijab.jpg') }}"
                            class="card-img-top custom-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Prima Hijab Surabaya</h5>
                            <p class="card-text">Buka - Setiap Hari (10:00 - 22:00) </p>
                            <p class="card-text"><a
                                    href="https://www.google.com/maps/dir//prima+hijab+surabaya+google+map/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2dd7fbac53d1d591:0xc8bb8515cf7f721e?sa=X&ved=1t:3061&ictx=111">Jl.
                                    Ngagel Jaya Sel.
                                    No.141-3, Kec. Gubeng, Surabaya</a></p>
                            <p class="card-text"><small class="text-body-secondary">Fashion</small></p>
                        </div>
                    </div>
                    <div class="card" style="width: 400px;">
                        <img src="{{ Vite::asset('resources/images/vector/Pijat.jpg') }}"
                            class="card-img-top custom-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Akira Reflexology</h5>
                            <p class="card-text">Buka - Setiap Hari (10:00 - 22:00) </p>
                            <p class="card-text"><a
                                    href="https://www.google.com/maps?rlz=1C1UEAD_enID988ID988&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQRRg7MgYIAhBFGD3SAQg0MjYzajBqN6gCALACAA&um=1&ie=UTF-8&fb=1&gl=id&sa=X&geocode=Kbnstj2iKdYtMW_e3v67n8TJ&daddr=Ruko+Puri+Niaga+A-10+Araya,+Pandanwangi,+Kec.+Blimbing,+Kota+Malang,+Jawa+Timur+65126">Pandanwangi,
                                    Pakis, Malang</a></p>
                            <p class="card-text"><small class="text-body-secondary">Service</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="text-center text-lg-start text-white p-4" style="background-color: #344C64">
                <section class="">
                    <div class="container text-center text-md-start ">
                        <div class="row mt-3">
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold">SEEU - Si UMKM</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #ffffff; height: 2px" />
                                <p>UMKM Berbasis Website yang Menampung Seluruh Data UMKM di Wilayah Jawa Timur
                                </p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold">Category</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #ffffff; height: 2px" />
                                <p>
                                    <a href="#!" class="text-white">Culinary</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Fashion</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Service</a>
                                </p>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold">Useful links</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #ffffff; height: 2px" />
                                <p>
                                    <a href="#!" class="text-white">About Us</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Contact</a>
                                </p>
                                <p>
                                    <a href="{{ route('login') }}" class="text-white">Login</a>
                                </p>
                            </div>
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <h6 class="text-uppercase fw-bold">Contact</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #ffffff; height: 2px" />
                                <p><i class="fas fa-home mr-3"></i> Jl. Ketintang Baru No. 66</p>
                                <p><i class="fas fa-envelope mr-3"></i> seeu@gmail.com</p>
                                <p><i class="fas fa-phone mr-3"></i> + 62 888 888 88</p>
                            </div>
                        </div>
                    </div>
                </section>

            </footer>
            <div class="text-center p-3 text-white" style="background-color: rgb(35, 30, 56)">
                © 2020 Copyright
                <a class="text-white" href="https://www.agungjayamandiri.com/">SEEU - Si UMKM</a>
            </div>
        </div>

    </div>
    </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
