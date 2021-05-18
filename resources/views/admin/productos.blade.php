@extends('layouts.adminplant')

@section('recurso')
<link rel="stylesheet" href="css/jquery-ui.min.css">
<style type="text/css">
    .card{
        max-height: 360px;
        min-height: 200px;
        max-width: 200px;
        min-width: auto;
    }
    .car-image{
        cursor: url("img/plus_cursor.png") 25 25, pointer;
    }
</style>
<script src="js/intense.js"></script>
@endsection

@section('titulo', 'Inventario')

@section('contenido')
<nav class="navbar navbar-light text-end">
    <div class="container-fluid justify-content-end">
        <form class="d-flex left">
            <input class="form-control me-2" type="text" placeholder="Nombre del producto" id="buscador" name="buscar">
            <button class="btn btn-outline-dark" type="submit">Buscar</button>
        </form>
    </div>
</nav>
<h2>Blusas</h2>
    <div class="row row-cols-auto">
        @foreach ($items->all() as $item)
        @if ($item->categoria == "Blusas")
        <div class="col-auto">
            <div class="card shadow-sm">
                <div class="card card-cover h-100 overflow-hidden text-white bg-light rounded-5">
                    <img class="car-image" src="{{$item->imagen}}">
                </div>
                <div class="card-body bg-transparent">
                    <h5 class="card-title">{{$item->nombre}}</h5>
                    <p class="card-text"><small class="text-muted">
                        <b>Estilo:</b> {{$item->estilo}}
                        <b>Precio:</b> Q {{$item->precio}}
                    </small></p>
                    <div class="d-flex justify-content-end">
                        <div class="btn-group-sm text-end">
                            <a href="{{route('admin.edit', $item->id)}}" class="btn btn-sm btn-outline-secondary">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
<hr>
<h2>Fajas</h2>
    <div class="row row-cols-auto">
        @foreach ($items->all() as $item)
        @if ($item->categoria == "Fajas")
        <div class="col-auto">
            <div class="card shadow-sm">
                <div class="card card-cover h-100 overflow-hidden text-white bg-light rounded-5">
                    <img class="car-image" src="{{$item->imagen}}">
                </div>
                <div class="card-body bg-transparent">
                    <h5 class="card-title">{{$item->nombre}}</h5>
                    <p class="card-text"><small class="text-muted">
                        <b>Estilo:</b> {{$item->estilo}}
                        <b>Precio:</b> Q {{$item->precio}}
                    </small></p>
                    <div class="d-flex justify-content-end">
                        <div class="btn-group-sm text-end">
                            <a href="{{route('admin.edit', $item->id)}}" class="btn btn-sm btn-outline-secondary">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
<hr>
<h2>Cortes</h2>
    <div class="row row-cols-auto">
        @foreach ($items->all() as $item)
        @if ($item->categoria == "Cortes")
        <div class="col-auto">
            <div class="card shadow-sm">
                <div class="card card-cover h-100 overflow-hidden text-white bg-light rounded-5">
                    <img class="car-image" src="{{$item->imagen}}">
                </div>
                <div class="card-body bg-transparent">
                    <h5 class="card-title">{{$item->nombre}}</h5>
                    <p class="card-text"><small class="text-muted">
                        <b>Estilo:</b> {{$item->estilo}}
                        <b>Precio:</b> Q {{$item->precio}}
                    </small></p>
                    <div class="d-flex justify-content-end">
                        <div class="btn-group-sm text-end">
                            <a href="{{route('admin.edit', $item->id)}}" class="btn btn-sm btn-outline-secondary">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
<hr>
<h2>Zapatos</h2>
    <div class="row row-cols-auto">
        @foreach ($items->all() as $item)
        @if ($item->categoria == "Zapatos")
        <div class="col-auto">
            <div class="card shadow-sm">
                <div class="card card-cover h-100 overflow-hidden text-white bg-light rounded-5">
                    <img class="car-image" src="{{$item->imagen}}">
                </div>
                <div class="card-body bg-transparent">
                    <h5 class="card-title">{{$item->nombre}}</h5>
                    <p class="card-text"><small class="text-muted">
                        <b>Estilo:</b> {{$item->estilo}}
                        <b>Precio:</b> Q {{$item->precio}}
                    </small></p>
                    <div class="d-flex justify-content-end">
                        <div class="btn-group-sm text-end">
                            <a href="{{route('admin.edit', $item->id)}}" class="btn btn-sm btn-outline-secondary">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
@endsection