<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="@yield('r')css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="@yield('r')js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="@yield('r')img/icono.svg">
</head>
<body>
    <main class="m-2 py-4 text-center">
        @yield('content')
    </main>
</body>
</html>
