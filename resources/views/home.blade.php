<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
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
                        <img class="mx-auto mb-5" src="" width="200px" alt="image">
                    @endif



                    <div class="w-100 mt-5 h-100">
                        <div class="d-grid">
                            <a class="btn btn-warning fw-bold btnHome mb-3" href="{{ route('home') }}">Home</a>

                            <a class="btn btn-dark mb-3" style="color:rgb(70, 70, 70)">UMKM</a>
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

                <div class="heroSection bg-white">
                    <div id="carouselExampleSlidesOnly" class="carousel slide mx-auto" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ Vite::asset('resources/images/vector/Shoppinglogin1.png') }}"
                                    alt="image" width="400px" class="d-block w-10 m-auto">
                                <div class="carousel-caption capt d-none d-md-block">
                                    <h5 class="fw-bold">CARI KEBUTUHAN ANDA</h5>
                                    <p>Kami menyediakan tempat untuk anda menemukan apa yang dibutuhkan</p>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <img src="{{ Vite::asset('resources/images/vector/Shoppinglogin2.png') }}"
                                    alt="image" width="400px" class="d-block w-10 m-auto">
                                <div class="carousel-caption capt d-none d-md-block">
                                    <h5 class="fw-bold">PROMOSI UMKM GRATIS?</h5>

                                    <p>Mari bersama kami dan menjadi mitra seumur hidup</p>
                                </div>

                            </div>
                            <div class="carousel-item ">
                                <img src="{{ Vite::asset('resources/images/vector/Shoppinglogin3.png') }}"
                                    alt="image" width="400px" class="d-block w-10 m-auto">
                                <div class="carousel-caption capt d-none d-md-block">
                                    <h5 class="fw-bold">TENTUKAN KUALITAS</h5>

                                    <p>Kami menyediakan fitur penilaian berdasarkan survey pelanggan</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

               
                <div class="umkmList bg-white">
                     <hr><div class="container bg-white">
                        <div class="row mb-0">
                            <div class="topUmkmList mt-5">
                                
                                <h1 class="fw-bold">UMKM</h1>
                                <div class="col-lg-3 col-xl-2">

                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#createUMKM">
                                        <i class="bi bi-plus-circle me-1"></i>Create UMKM
                                    </button>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="categoryBody mb-5 mt-5">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                        <button
                                            class="filter-btn active btn2 border-0 py-2 w-100 rounded fw-bold">Culinary</button>
                                    </div>
                                    <div class="col">
                                        <button
                                            class="filter-btn btn3 border-0 py-2 w-100 rounded fw-bold">Fashion</button>
                                    </div>
                                    <div class="col">
                                        <button
                                            class="filter-btn btn4 border-0 py-2 w-100 rounded  fw-bold">Service</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-body d-flex">
                            <div class="sub-body1">
                                @if ($culinary->count() > 0)
                                    <div class="text-center item2">
                                        <div class="row product-list2 w-100">

                                            @if ($umkm->isEmpty())
                                                <h1>Kosong</h1>
                                            @else
                                                @foreach ($culinary as $umkms)
                                                    @if ($umkmCount <= 6)
                                                        <div class="col">
                                                            <div class="card" style="width: 18rem;">
                                                                <img class="card-img-top"
                                                                    src="{{ Vite::asset('/public/resources/images/umkm/profileUMKM/' . $umkms->original_photoname) }}"
                                                                    width="1366px" height="200px" alt="image">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{ $umkms->umkm }}</h5>
                                                                    <p class="card-text">{{ $umkms->description }}</p>
                                                                    <a href="#" class="btn btn-primary">Go
                                                                        somewhere</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <p>No UMKM found.</p>
                                @endif
                            </div>


                            <div class="sub-body2">
                                @if ($fashion->count() > 0)
                                    <div class="text-center item3">
                                        <div class="row product-list3">

                                            @if ($umkm->isEmpty())
                                                <h1>Kosong</h1>
                                            @else
                                                @foreach ($fashion as $umkms)
                                                    @if ($umkmCount <= 6)
                                                        <div class="col">
                                                            <div class="card" style="width: 18rem;">
                                                                <img class="card-img-top"
                                                                    src="{{ Vite::asset('/public/resources/images/umkm/profileUMKM/' . $umkms->original_photoname) }}"
                                                                    width="1366px" height="200px" alt="image">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{ $umkms->umkm }}</h5>
                                                                    <p class="card-text">{{ $umkms->description }}</p>
                                                                    <a href="#" class="btn btn-primary">Go
                                                                        somewhere</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <p>No UMKM found.</p>
                                @endif
                            </div>


                            <div class="sub-body3">
                                @if ($service->count() > 0)
                                    <div class="text-center item4">
                                        <div class="row product-list4">

                                            @if ($umkm->isEmpty())
                                                <h1>Kosong</h1>
                                            @else
                                                @foreach ($service as $umkms)
                                                    @if ($umkmCount <= 6)
                                                        <div class="col">
                                                            <div class="card" style="width: 18rem;">
                                                                <img class="card-img-top"
                                                                    src="{{ Vite::asset('/public/resources/images/umkm/profileUMKM/' . $umkms->original_photoname) }}"
                                                                    width="1366px" height="200px" alt="image">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{ $umkms->umkm }}</h5>
                                                                    <p class="card-text">{{ $umkms->description }}</p>
                                                                    <a href="#" class="btn btn-primary">Go
                                                                        somewhere</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <p>No UMKM found.</p>
                                @endif
                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>



    <div class="d-grid gap-2 text-start">
        <div class="modal fade" id="createUMKM" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah UMKM</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="umkm" class="form-label">UMKM</label>
                                <input class="form-control @error('umkm') is-invalid @enderror" type="text"
                                    name="umkm" id="umkm" value="{{ old('umkm') }}"
                                    placeholder="Enter UMKM">
                                @error('umkm')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <input class="form-control @error('description') is-invalid @enderror" type="text"
                                    name="description" id="description" value="{{ old('description') }}"
                                    placeholder="Enter Description">
                                @error('description')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="text"
                                    name="email" id="email" value="{{ old('email') }}"
                                    placeholder="Enter Email">
                                @error('email')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input class="form-control @error('address') is-invalid @enderror" type="text"
                                    name="address" id="address" value="{{ old('address') }}"
                                    placeholder="Enter Address">
                                @error('address')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="telNum" class="form-label">Telephone Number</label>
                                <input class="form-control @error('telNum') is-invalid @enderror" type="text"
                                    name="telNum" id="telNum" value="{{ old('telNum') }}"
                                    placeholder="Enter Telephone Number">
                                @error('telNum')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="category" class="form-label">category</label>
                                <select name="category" id="category" class="form-select">
                                    @foreach ($category as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="cv" class="form-label">
                                    Surat Izin Mendirikan Usaha
                                </label>
                                <input type="file" class="form-control" name="usahaDoc" id="usahaDoc">
                            </div>

                            <div class="col-md-6 mb-3 w-100">

                                <div class="input-group">
                                    <div class="icon">
                                        <img src="{{ Vite::asset('resources/images/Icon/imgIcon.png') }}"
                                            alt="image" width="25">

                                    </div>
                                    <input type="file" class="form-control" name="imgPhoto" id="imgPhoto">
                                </div>
                                @error('imgPhoto')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
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



        const btn2 = document.querySelector(".btn2");
        const btn3 = document.querySelector(".btn3");
        const btn4 = document.querySelector(".btn4");

        const product2 = document.querySelector(".product-list2");
        const product3 = document.querySelector(".product-list3");
        const product4 = document.querySelector(".product-list4");

        btn2.addEventListener("click", function() {
            btn2.classList.toggle("active");
            btn3.classList.remove("active");
            btn4.classList.remove("active");

            product2.style.transform = "translateX(0px)";
            product3.style.transform = "translateX(0px)";
            product4.style.transform = "translateX(0px)";
        });

        btn3.addEventListener("click", function() {
            btn3.classList.toggle("active");
            btn2.classList.remove("active");
            btn4.classList.remove("active");

            product2.style.transform = "translateX(-1140px)";
            product2.style.transition = "3s";
            product3.style.transform = "translateX(-1140px)";
            product3.style.transition = "3s";
            product4.style.transform = "translateX(-1140px)";
            product4.style.transition = "3s";
        });

        btn4.addEventListener("click", function() {
            btn4.classList.toggle("active");
            btn2.classList.remove("active");
            btn3.classList.remove("active");

            product2.style.transform = "translateX(-2280px)";
            product2.style.transition = "3s";
            product3.style.transform = "translateX(-2280px)";
            product3.style.transition = "3s";
            product4.style.transform = "translateX(-2280px)";
            product4.style.transition = "3s";
        });
    </script>

    @include('sweetalert::alert')

    @vite('resources/js/app.js')

    @vite('resources/js/home.js')
</body>

</html>
