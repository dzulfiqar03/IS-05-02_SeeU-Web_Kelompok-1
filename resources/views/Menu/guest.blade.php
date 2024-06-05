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


</body>

</html>
