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
