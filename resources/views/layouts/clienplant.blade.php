<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="@yield('r')css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="@yield('r')js/bootstrap.bundle.min.js"></script>
    <script src="@yield('r')js/ajax.js"></script>
    @yield('recursos')
</head>
<body>
    <main>
    <div class="container-fluid">
        @yield('contenido')
    </div>
    </main>
    @yield('js')
</body>
</html>