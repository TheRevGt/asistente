@extends('layouts.catalplant')

@section('titulo', 'categoria')

@section('r', '../')

@section('recurso')
<style type="text/css">
    .card{
        max-height: 360px;
        min-height: 200px;
        max-width: 200px;
        min-width: auto;
    }
</style>    
@endsection
    
@section('contenido')
<div class="row row-cols-auto">
    @foreach ($items as $item)
    @if ($item->id != null)
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
                        <a href="{{route('client.asist', $item)}}" class="btn btn-sm btn-outline-secondary">Completar con traje</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        <h2>Sin articulos para mostrarsa</h2>
    @endif
    
    @endforeach
    </div>
@endsection