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
            <!-- hero 1-->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <h1 class="display-3 fw-bold">Anyone, anywhere, can start <span
                                    class="text-primary">Bootstrap</span></h1>
                            <p class="lead my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat
                                erat quis pulvinar semper.</p><a class="btn btn-lg btn-primary" href="">Get
                                Started</a>
                        </div>
                        <div class="col-lg-6"><img alt="" class="img-fluid"
                                src="https://freefrontend.dev/assets/square.png"></div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
                            <div class="mb-3">
                                <svg class="bi bi-globe-asia-australia" fill="currentColor" height="48"
                                    viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m10.495 6.92 1.278-.619a.483.483 0 0 0 .126-.782c-.252-.244-.682-.139-.932.107-.23.226-.513.373-.816.53l-.102.054c-.338.178-.264.626.1.736a.476.476 0 0 0 .346-.027ZM7.741 9.808V9.78a.413.413 0 1 1 .783.183l-.22.443a.602.602 0 0 1-.12.167l-.193.185a.36.36 0 1 1-.5-.516l.112-.108a.453.453 0 0 0 .138-.326ZM5.672 12.5l.482.233A.386.386 0 1 0 6.32 12h-.416a.702.702 0 0 1-.419-.139l-.277-.206a.302.302 0 1 0-.298.52l.761.325Z">
                                    </path>
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM1.612 10.867l.756-1.288a1 1 0 0 1 1.545-.225l1.074 1.005a.986.986 0 0 0 1.36-.011l.038-.037a.882.882 0 0 0 .26-.755c-.075-.548.37-1.033.92-1.099.728-.086 1.587-.324 1.728-.957.086-.386-.114-.83-.361-1.2-.207-.312 0-.8.374-.8.123 0 .24-.055.318-.15l.393-.474c.196-.237.491-.368.797-.403.554-.064 1.407-.277 1.583-.973.098-.391-.192-.634-.484-.88-.254-.212-.51-.426-.515-.741a6.998 6.998 0 0 1 3.425 7.692 1.015 1.015 0 0 0-.087-.063l-.316-.204a1 1 0 0 0-.977-.06l-.169.082a1 1 0 0 1-.741.051l-1.021-.329A1 1 0 0 0 11.205 9h-.165a1 1 0 0 0-.945.674l-.172.499a1 1 0 0 1-.404.514l-.802.518a1 1 0 0 0-.458.84v.455a1 1 0 0 0 1 1h.257a1 1 0 0 1 .542.16l.762.49a.998.998 0 0 0 .283.126 7.001 7.001 0 0 1-9.49-3.409Z">
                                    </path>
                                </svg>
                            </div>
                            <h4>Satisfied</h4>
                            <p>International clients that are satisfied</p>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
                            <div class="mb-3">
                                <svg class="bi bi-calendar-event" fill="currentColor" height="48"
                                    viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z">
                                    </path>
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z">
                                    </path>
                                </svg>
                            </div>
                            <h4>Experience</h4>
                            <p>Years of expertise in website design</p>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
                            <div class="mb-3">
                                <svg class="bi bi-people-fill" fill="currentColor" height="48"
                                    viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z">
                                    </path>
                                </svg>
                            </div>
                            <h4>Trust</h4>
                            <p>Users believe our code snippets</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="mb-3">
                                <svg class="bi bi-brightness-high-fill" fill="currentColor" height="48"
                                    viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
                                    </path>
                                </svg>
                            </div>
                            <h4>Strategy</h4>
                            <p>Great efforts to take Designing Next Level</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hero 2-->
            <div class="p-4">
                <h3 class="section-heading text-uppercase">contoh kategori</h3>
                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 100px; background-color: #000000; height: 5px" />
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
                © 2020 Copyright :
                <a class="text-white" href="https://www.agungjayamandiri.com/" style="text-decoration: none;">SEEU - Si UMKM</a>
            </div>
        </div>

    </div>
    </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
