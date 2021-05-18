@extends('layouts.clienplant')

@section('titulo', 'Asistente')

@section('recursos')
<style>
    .card img {
		max-height: 250px;
		left: 25%;
	}
	.card input{
		display: none;
	}
</style>
@endsection

@section('contenido')
    <!--Bienvenida-->
	<div class="row" id="DivBien">
        <div class="d-flex justify-content-end">
            <a href="{{route('login')}}" class="btn btn-sm btn-outline-secundary">Ingresar</a>
        </div>  
        <div class="position-absolute top-50 start-50 translate-middle overflow-hidden text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">Bienvenido a tu asistente</h1>
                <p class="lead fw-normal">Te ayudamos a seleccionar los complemntos de tu ropa de mejor manera.</p>
            </div>
            <div class="carousel-dark">
                <button class="carousel-control-next" type="button" id="vamos">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguente</span>
                </button>
            </div>
        </div>
    </div>
    <!--Menu-->
    <form action="" method="POST">
	<div class=" container-fluid" id="DivMenu">
        <div class="row row-cols-2 vh-100">
            <label class="checkeable col p-2 text-end">
                <a href="{{route('client.showc', 'Blusas')}}">
                <div class="card card-cover text-end h-100 overflow-hidden bg-white rounded-5 shadow-sm">
                    <img class="position-absolute" src="img/blusa.png"/>
                    <div class="position-absolute d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><small class="text-muted">Blusas</small></h2>
                    </div>
                    <input class="form-check-input" type="radio" name="item1"/>
                </div>
                </a>
            </label>
            <label class="checkeable col p-2 text-end">
                <a href="{{route('client.showc', 'Fajas')}}">
                <div class="card card-cover text-end h-100 overflow-hidden bg-white rounded-5 shadow-sm">
                    <img class="position-absolute" src="img/faja.png"/>
                    <div class="position-absolute d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><small class="text-muted">Faja</small></h2>
                    </div>
                    <input class="form-check-input" type="radio" name="item2"/>
                </div>
                </a>
            </label>
            <label class="checkeable col p-2 text-end">
                <a href="{{route('client.showc', 'Cortes')}}">
                <div class="card card-cover text-end h-100 overflow-hidden bg-white rounded-5 shadow-sm">
                    <img class="position-absolute" src="img/corte.png"/>
                    <div class="position-absolute d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><small class="text-muted">Corte</small></h2>
                    </div>
                    <input class="form-check-input" type="radio" name="item3"/>
                </div>
                </a>
            </label>
            <label class="checkeable col p-2 text-end">
                <a href="{{route('client.showc', 'Zapatos')}}">
                <div class="card card-cover text-end h-100 overflow-hidden bg-white rounded-5 shadow-sm">
                    <img class="position-absolute" src="img/zapato.png"/>
                    <div class="position-absolute d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><small class="text-muted">Zapatos</small></h2>
                    </div>
                    <input class="form-check-input" type="radio" name="item4"/>
                </div>
                </a>
            </label>
            </div>
            <div class="carousel-dark">
            <button class="carousel-control-prev" type="button">
                <span class="carousel-control-prev-icon" aria-hidden="true" id="btmpre"></span>
                <span class="visually-hidden">Regresar</span>
            </button>
            </div>
    </div>
    </form>
@endsection
@section('js')
<script>
//vistas
dysbienv = document.getElementById('DivBien');
dysmenu = document.getElementById("DivMenu");
//botones
btnVamos = document.getElementById('vamos');
btnMpre = document.getElementById('btmpre');
btnMnext = document.getElementById('btmnext');
//intancias
dysmenu.style.display = "none";
//funciones
btnVamos.addEventListener("click", function(){
dysmenu.style.display = "block";
dysbienv.style.display = "none";
});
btnMpre.addEventListener("click", function(){
dysmenu.style.display = "none";
dysbienv.style.display = "block";
});
//agregar clases
$(document).on('click', '.checkeable', function(event) {
	$(this).addClass('shadow-lg').siblings().removeClass('shadow-lg');
});
$(document).on('click', '.box', function(event) {
	$(this).css('display', 'block');
});
</script>
@endsection