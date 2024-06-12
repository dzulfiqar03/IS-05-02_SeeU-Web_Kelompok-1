<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/sass/app.scss')

</head>
<body>

    <div class="sectin">
            <img src="{{ Vite::asset('resources/images/Logo/mainLogo-wthTxt.png') }}"
    alt="image" width="70px" class="d-block w-10 m-auto">

    <h1>Welcome</h1>
    <a href="{{route("reset.password", $token)}}">Reset passsword</a>

    </div>

</body>
</html>
