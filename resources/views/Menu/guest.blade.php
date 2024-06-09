<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest Page</title>
    @vite('resources/sass/app.scss')

</head>

<body>

    <div class="text-center">

            <div class="col rightContent vh-100">
                @php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-md navbar-dark mainColor">
    <div class="container">
        <a href="" class="navbar-brand mb-0 h1"> <img src="{{ Vite::asset('resources/images/Logo/mainLogo-light-txt.png') }}" width="100px"
                alt="image" class="d-block w-10 m-auto">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  justify-content-between" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="" class="nav-link">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href=""
                        class="nav-link
@if ($currentRouteName == 'employees.index') active @endif">Employee</a></li>
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

                <div class="container mt-4">
                    <div class="row mb-0">
                        <div class="col-lg-9 col-xl-10">
                        </div>
                        <div class="col-lg-3 col-xl-2">
                            <div class="d-grid gap-2">
                                <a href="" class="btn btn-warning fw-bold">Add Business</a>
                            </div>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
    </div>


</body>

</html>
