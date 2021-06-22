<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="@yield('r')css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="@yield('r')js/bootstrap.bundle.min.js"></script>
    <script src="@yield('r')js/ajax.js"></script>
    @yield('recurso')
    <title>@yield('titulo')</title>
    <link rel="icon" href="@yield('r')img/icono.svg">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('index')}}">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navAsis" aria-controls="navAsis" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navAsis">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{route('index')}}">Asistente</a>
          <a class="nav-link" href="{{route('client.showc', 'Blusas')}}">Bluas</a>
          <a class="nav-link" href="{{route('client.showc', 'Fajas')}}">Fajas</a>
          <a class="nav-link" href="{{route('client.showc', 'Cortes')}}">Corte</a>
          <a class="nav-link" href="{{route('client.showc', 'Zapatos')}}">Zapatos</a>
        </div>
      </div>
    </div>
  </nav>
  <main>
    <div class="container-fluid pb-5">
        @yield('contenido')
    </div>
  </main>

    <!--footer de la plantilla-->
    <footer class="footer mt-auto py-3 bg-lite fixed-bottom">
        <div class="container">
            <span class="text-muted"> Derechos reservados </span>
    </footer>
    <!--js-->
    @yield('js')
</body>
</html>