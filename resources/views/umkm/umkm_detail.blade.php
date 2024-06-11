<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail UMKM</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    @foreach ($umkm as $umkm)
        @if ($idUmkm == $umkm->id)
            <h1>{{ $umkm->umkm }}</h1>
            <div class="card mb-3" style="max-width: ;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ Vite::asset('/public/resources/images/umkm/profileUMKM/' . $umkm->original_photoname) }}" class="img-fluid rounded-start"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">

                            {{-- <ul class="list-group mb-3">
                                <li class="list-group-item"><strong>Nama UMKM:</strong> {{ $umkm->umkm }}</li>
                        <li class="list-group-item"><strong>Description:</strong> {{ $umkm->description }}</li>
                    </ul> --}}
                            <ul class="list-unstyled mb-3">

                                <div class="col-md-4 mb-3">
                                    <label for="umkm" class="form-label">Nama UMKM</label>
                                    <h5>{{ $umkm->umkm }}</h5>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <h5>{{ $umkm->description }}</h5>
                                </div>
                            </ul>

                            <div class="container text-center">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <div class="col-md-4 mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <h5>{{ $umkm->email }}</h5>
                                        </div>
                                    </div>
                                        <div class="col">
                                            <div class="col-md-12 mb-3">
                                                <label for="address" class="form-label">Address</label>
                                                <h5>{{ $umkm->address }}</h5>
                                            </div>
                                        </div>
                                            <div class="col">
                                                <div class="col-md-12 mb-3">
                                                    <label for="age" class="form-label">category</label>
                                                    <h5>{{ $umkm->category->name }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 d-grid">
                                    <a href="{{ route('home') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                            class="bi-arrow-left-circle me-2"></i> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            </div>
            </div>
            </div>
        @endif
    @endforeach

    @vite('resources/js/app.js')
</body>

</html>
