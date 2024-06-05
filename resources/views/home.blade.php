<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    @vite('resources/sass/app.scss')

</head>

<body>

    <div class="text-center">
        <div class="d-flex">
            <div class="leftContent p-2 gap-50 vh-100" id="leftContent">

                @if (Auth::check())
                    <img class="mx-auto mb-5"
                        src="{{ Vite::asset('/public/resources/images/members/' . Auth::user()->original_filename) }}"
                        width="200px" alt="image">
                @else
                    <img class="mx-auto mb-5" src="" width="200px" alt="image">
                @endif



                <div class="w-100">
                    <div class="d-grid">
                        <a class="btn btn-warning fw-bold btnReg mb-3">Daftar Barang</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>

                    </div>


                </div>
            </div>
            <div class="col rightContent vh-100">
                @include('layouts.nav')
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
    </div>


</body>

</html>
