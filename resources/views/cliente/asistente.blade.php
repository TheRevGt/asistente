@extends('layouts.asisplant')

@section('titulo', 'Asistente')

@section('r', '../')

@section('recurso')
    <style>
    .carousel{
        height: 25vh;
    }
    .card{
        margin: auto;
        text-align: center;
    }
    .card img{
        max-height: 15vh;
        height: auto;
        width: auto;
        max-width: 150px;
        cursor: pointer;
    }
    .b img{
		max-width: 200px;
		height: 37vh;
	}
    .l img{
		max-width: 200px;
		height: 48vh;
	}
	.z img{
		max-width: 200px;
        margin: auto;
		height: 15vh;
	}
	.f {
		z-index: 1010;
		height: 10vh;
		margin-top: 30vh;
        margin-left: 2vh;
	}
	.f img{
		max-width: 150px;
		height: 7vh;
	}
    .carousel button{
        width: 25px;
    }
    </style>

@endsection
@section('contenido')
<!--nav-->
<nav class="navbar navbar-expand-md bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('index')}}">Logo</a>
    </div>
</nav>

<main>
    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-9 col-sm-8 col-lg-9">
                <div class="row">
                    <div class="col border-bottom" id="blusas">
                        <div id="caroBlusa" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                    @php
                                        $val = 1;
                                        foreach($tquery as $item){
                                            if ($item->categoria == "Blusas") {
                                                if ($val <= 4) {
                                                echo '<div class="col-6 col-sm-3">
                                                        <div class="card">
                                                            <img src="'.$item->imagen.'" class="card-img-top">                                                
                                                        </div>
                                                        <div class="card-body">
                                                            <h6 class="text-uppercase fw-light text-center">'.$item->nombre.'</h6>
                                                        </div>
                                                    </div>';
                                                }
                                            }
                                            
                                            $val++;
                                        }
                                    @endphp
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    @php
                                        $val = 1;                            
                                        foreach($tquery as $item){
                                            if ($item->categoria == "Blusas") {
                                                if ($val > 4) {
                                                echo '<div class="col-6 col-sm-3">
                                                    <div class="card">
                                                        <img src="'.$item->imagen.'" class="card-img-top" alt="...">
                                                        <h5 class="position-absolute bottom-0 card-title text-white">'.$item->nombre.'</h5>
                                                    </div>
                                                </div>';
                                            }
                                            else {                               
                                                break;
                                            }
                                            }                            
                                            $val++;
                                        }
                                    @endphp
                                </div>
                            </div>
                        </div>
                            <button class="carousel-control-prev bg-light" type="button" data-bs-target="#caroBlusa" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next bg-light" type="button" data-bs-target="#caroBlusa" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!--Fajas-->
                <div class="row">
                    <div class="col border-bottom" id="fajas">
                        <div id="caroFaja" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                    @php
                                        $val = 1;
                                        foreach($tquery as $item){
                                            if ($item->categoria == "Fajas") {
                                                if ($val <= 4) {
                                                echo '<div class="col-6 col-sm-3">
                                                        <div class="card">
                                                            <img src="'.$item->imagen.'" class="card-img-top">                                                
                                                        </div>
                                                        <div class="card-body">
                                                            <h6 class="text-uppercase fw-light text-center">'.$item->nombre.'</h6>
                                                        </div>
                                                    </div>';
                                                }
                                            }
                                            
                                            $val++;
                                        }
                                    @endphp
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    @php
                                        $val = 1;                            
                                        foreach($tquery as $item){
                                            if ($item->categoria == "Fajas") {
                                                if ($val > 4) {
                                                echo '<div class="col-6 col-sm-3">
                                                    <div class="card">
                                                        <img src="'.$item->imagen.'" class="card-img-top" alt="...">
                                                        <h5 class="position-absolute bottom-0 card-title text-white">'.$item->nombre.'</h5>
                                                    </div>
                                                </div>';
                                            }
                                            else {                               
                                                break;
                                            }
                                            }                            
                                            $val++;
                                        }
                                    @endphp
                                </div>
                            </div>
                        </div>
                            <button class="carousel-control-prev bg-light" type="button" data-bs-target="#caroFaja" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next bg-light" type="button" data-bs-target="#caroBlusa" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!--Cortes-->
                <div class="row">
                    <div class="col border-bottom" id="cortes">
                        <div id="carCortes" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                    @php
                                        $val = 1;
                                        foreach($tquery as $item){
                                            if ($item->categoria == "Cortes") {
                                                if ($val <= 4) {
                                                echo '<div class="col-6 col-sm-3">
                                                        <div class="card">
                                                            <img src="'.$item->imagen.'" class="card-img-top">                                                
                                                        </div>
                                                        <div class="card-body">
                                                            <h6 class="text-uppercase fw-light text-center">'.$item->nombre.'</h6>
                                                        </div>
                                                    </div>';
                                                }
                                            }
                                            
                                            $val++;
                                        }
                                    @endphp
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    @php
                                        $val = 1;                            
                                        foreach($tquery as $item){
                                            if ($item->categoria == "Cortes") {
                                                if ($val > 4) {
                                                echo '<div class="col-6 col-sm-3">
                                                    <div class="card">
                                                        <img src="'.$item->imagen.'" class="card-img-top" alt="...">
                                                        <h5 class="position-absolute bottom-0 card-title text-white">'.$item->nombre.'</h5>
                                                    </div>
                                                </div>';
                                            }
                                            else {                               
                                                break;
                                            }
                                            }                            
                                            $val++;
                                        }
                                    @endphp
                                </div>
                            </div>
                        </div>
                            <button class="carousel-control-prev bg-light" type="button" data-bs-target="#carCortes" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next bg-light" type="button" data-bs-target="#caroCortes" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!--Fajas-->
                <div class="row">
                    <div class="col border-bottom" id="zapatos">
                        <div id="caroZapatos" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                    @php
                                        $val = 1;
                                        foreach($tquery as $item){
                                            if ($item->categoria == "Zapatos") {
                                                if ($val <= 4) {
                                                echo '<div class="col-6 col-sm-3">
                                                        <div class="card">
                                                            <img src="'.$item->imagen.'" class="card-img-top">                                                
                                                        </div>
                                                        <div class="card-body">
                                                            <h6 class="text-uppercase fw-light text-center">'.$item->nombre.'</h6>
                                                        </div>
                                                    </div>';
                                                }
                                            }
                                            
                                            $val++;
                                        }
                                    @endphp
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    @php
                                        $val = 1;                            
                                        foreach($tquery as $item){
                                            if ($item->categoria == "Zapatos") {
                                                if ($val > 4) {
                                                echo '<div class="col-6 col-sm-3">
                                                    <div class="card">
                                                        <img src="'.$item->imagen.'" class="card-img-top" alt="...">
                                                        <h5 class="position-absolute bottom-0 card-title text-white">'.$item->nombre.'</h5>
                                                    </div>
                                                </div>';
                                            }
                                            else {                               
                                                break;
                                            }
                                            }                            
                                            $val++;
                                        }
                                    @endphp
                                </div>
                            </div>
                        </div>
                            <button class="carousel-control-prev bg-light" type="button" data-bs-target="#caroZapatos" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next bg-light" type="button" data-bs-target="#caroBZapatos" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--agregamos vista-->
            <div class="col-3 col-sm-4 col-lg-3">
                <div class="container-fluid">
                    <div class="row vh-100 text-center">
                        <div class="b" style="max-height: 37vh">
                        @foreach ($tquery as $it)
                        @if ($it->categoria == "Blusas")
                            <img src="{{$it->imagen}}" id="blusaView">
                            @break
                        @endif
                        @endforeach
                        </div>
                        <div class="col-2 position-absolute f">
                        @foreach ($tquery as $it)
                        @if ($it->categoria == "Fajas")
                            <img src="{{$it->imagen}}" id="fajaView">
                            @break
                        @endif
                        @endforeach
                        </div>
                        <div class="l" style="max-height: 48vh;">
                        @foreach ($tquery as $it)
                        
                        @if ($it->categoria == "Cortes")
                            <img src="{{$it->imagen}}" id="corteView">
                            @break
                        @endif
                        @endforeach
                        </div>
                        <div class="z" style="max-height: 15vh">
                        @foreach ($tquery as $it)            
                        @if ($it->categoria == "Zapatos")                    
                            <img src="{{$it->imagen}}" id="zapatoView">
                            @break
                        @endif
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </div>
</main>

@endsection

@section('js')
    <script>
        var imgBlusa = document.getElementById('blusaView'),
            imgFaja = document.getElementById('fajaView'),
            imgCorte = document.getElementById('corteView'),
            imgZapato = document.getElementById('zapatoView'),
            caroBlusa = document.querySelector('#caroBlusa'),
            caroFaja = document.querySelector('#caroFaja'),
            caroCorte = document.querySelector("#carCortes"),
            caroZapatos = document.querySelector("#caroZapatos");
        $('#caroBlusa').on('click', 'img', function(){ 
		var thisSrc = $(this).attr('src');
		imgBlusa.src = thisSrc;
		});
        $('#caroFaja').on('click', 'img', function(){ 
		var thisSrc = $(this).attr('src');
		imgFaja.src = thisSrc;
		});
        $('#carCortes').on('click', 'img', function(){ 
		var thisSrc = $(this).attr('src');
		imgCorte.src = thisSrc;
		});
        $('#caroZapatos').on('click', 'img', function(){ 
		var thisSrc = $(this).attr('src');
		imgZapato.src = thisSrc;
		});
		var carouselb = new bootstrap.Carousel(caroBlusa, {
		    interval: 0,
            ride:false
		});

		var carouself = new bootstrap.Carousel(caroFaja, {
		    interval: 0,
            ride:false
		});
        var carouselc = new bootstrap.Carousel(caroCorte, {
		    interval: 0,
            ride:false
		});
        var carouselz = new bootstrap.Carousel(caroZapatos, {
		    interval: 0,
            ride:false
		});
    </script>

@endsection