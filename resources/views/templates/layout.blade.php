<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">
    <title>Asm-PH26068</title>
</head>
<body>
{{-- Menu --}}
{{-- Nội dung --}}
<div>
    @include('templates.error')
    @yield('content')
</div>
<footer>
    <p>Trịnh Khắc Lưc</p>
</footer>
</body>
