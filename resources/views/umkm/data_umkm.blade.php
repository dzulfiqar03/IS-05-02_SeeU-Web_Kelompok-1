<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Menu</title>
    @vite('resources/sass/app.scss')

    <style>
        body {
            background-color: rgb(22, 22, 22);

        }
    </style>
</head>

<body>


    <div class="text-center">
        <div class="d-flex">
            <div class="leftContent p-2 gap-50 vh-100" id="leftContent">

                <div class="topContent h-100">

                    @if (Auth::check())
                        <img class="mx-auto mb-5"
                            src="{{ Vite::asset('/public/resources/images/members/' . Auth::user()->original_filename) }}"
                            width="200px" alt="image">
                    @else
                        <img class="mx-auto mb-5" src="{{ Vite::asset('resources/images/profile.png') }}" width="200px"
                            height="200px" alt="image">
                    @endif



                    <div class="w-100 mt-5 h-100">
                        <div class="d-grid">
                            <a class="btn btn-dark fw-bold mb-3" href="{{ route('admin.index') }}"
                                style="color:rgb(70, 70, 70)">Home</a>

                            <a class="btn btn-warning  mb-3" href="{{ route('dataUmkm') }}">UMKM</a>
                            <a class="btn btn-dark  mb-3" style="color:rgb(70, 70, 70)">About Us</a>
                        </div>


                    </div>
                </div>

                <div class="bottomContent">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-danger w-100 fw-bold btnReg border-0" type="submit">Logout</button>
                    </form>
                </div>

            </div>
            <div class="col rightContent bg-white vh-100">
                @include('layouts.nav')
                <div class="container mt-4">
                    <div class="row mb-0">

                        <div class="col-lg-3 col-xl-6">
                            <ul class="list-inline mb-0 float-end">
                                <li class="list-inline-item">
                                    <a href="{{ route('admin.exportExcel') }}" class="btn btn-outline-success">
                                        <i class="bi bi-download me-1"></i> to Excel
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <hr>
                    <div class="table-responsive border p-3 rounded-3">
                        <table class="table table-bordered table-hover table-striped mb-0 bg-white" id="umkmTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>No.</th>
                                    <th>UMKM</th>
                                    <th>Description</th>
                                    <th>Email</th>
                                    <th>Telephone Number</th>
                                    <th>Kategori</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        var btnTgl1 = document.getElementById('btnTgl1');
        var btnTgl2 = document.getElementById('btnTgl2');
        var leftContent = document.getElementById('leftContent');
        var backToogle = document.getElementById('backToogle');



        btnTgl1.addEventListener("click", function() {
            leftContent.style.display = "grid";
            btnTgl1.style.transform = "scale(0)";
            backToogle.style.transform = "scale(1)";
            backToogle.style.position = "static";
            btnTgl1.style.position = "absolute";
        });

        backToogle.addEventListener("click", function() {
            leftContent.style.display = "none";
            btnTgl1.style.transform = "scale(1)";
            backToogle.style.transform = "scale(0)";
        });
    </script>
    @stack('scripts')




    @vite('resources/js/app.js')

</body>

</html>
