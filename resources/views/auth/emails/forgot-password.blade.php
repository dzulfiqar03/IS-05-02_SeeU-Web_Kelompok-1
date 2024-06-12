<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/sass/app.scss')
    <style>
        .reset-link {
            color: #007BFF; /* Warna biru */
            text-decoration: none;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            background-color: #f8f9fa; /* Warna latar belakang */
            padding: 10px 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .reset-link:hover {
            color: #0056b3; /* Warna saat hover */
            background-color: #e2e6ea; /* Warna latar saat hover */
        }
        .reset-link img {
            margin-right: 8px; /* Jarak antara logo dan teks */
        }
    </style>
</head>
<body>
    <a href="{{route('reset.password', $token)}}" class="reset-link">
        <img src="{{ Vite::asset('resources/images/reset_icon.png') }}" alt="Reset Icon" width="20">
        Reset Password
    </a>
</body>
</html>