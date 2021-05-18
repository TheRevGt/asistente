@extends('layouts.adminplant')

@section('recurso')
<link href="css/admin/dropzone.css" rel="stylesheet">
<link href="css/admin/main.css" rel="stylesheet">
<link href="css/admin/cropper.css" rel="stylesheet">
<script src="js/admin/dropzone.js"></script>
<script src="js/admin/cropper.js"></script>
@endsection

@section('titulo', 'registro')

@section('contenido')

<!--Modal de editor de imagen-->
  <form class="row text-center" action="{{route('admin.store')}}" method="POST">
    @csrf
    <div class="text-center p-3">
          <label for="upload_image">
              <img src="img/camara.png" id="uploaded_image" class="rounded mx-auto d-block" height="100"/>
              <textarea id="inmGombre" name="image" rows="4" cols="50" style="display: none;"> value="{{old('imgane')}}"</textarea>
              <div class="">
                  <div class="text">Subir foto</div>
              </div>
              <input type="file" class="image" id="upload_image" style="display:none" accept="image/png"/>
              <div class="row" id="colors">
                  
              </div>
          </label>
          @error('image')
          <p class="text-white bg-danger p-3">*{{$message}}</p>
          @enderror
    </div>
    <div class="col-md-6">
      <label for="inCategoria" class="form-label fw-bold">Categoria</label>
      <select id="inCategoria" class="form-select" name="categoria" required>
        <option selected value="Blusas">Blusa</option>
        <option value="Fajas">Fajas</option>
        <option value="Cortes">Cortes</option>
        <option value="Zapatos">Zapatos</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="inNombre" class="form-label fw-bold">Nombre</label>
      <input type="text" class="form-control" id="inNombre" name="nombre" required value="{{old('nombre')}}">
      @error('nombre')
          <p class="text-white bg-danger p-3">*{{$message}}</p>
      @enderror
    </div>
    <div class="col-md-6">
      <label for="inEstilo" class="form-label fw-bold">Estilo</label>
      <input type="text" class="form-control" id="inEstilo" name="estilo" required value="{{old('estilo')}}">
      @error('estilo')
          <p class="text-white bg-danger p-3">*{{$message}}</p>
      @enderror
    </div>
    <div class="col-md-6">
      <label for="inTipico" class="form-label fw-bold">Tipico</label>
      <input type="text" class="form-control" id="inTipico" name="tipico" value="{{old('tipico')}}">
    </div>
    <div class="col-md-6">
      <label for="inClase" class="form-label fw-bold">Clase</label>
      <select id="inClase" class="form-select" name="clase" required value="{{old('clase')}}">
        <option selected value="Clase 1">Clase 1</option>
        <option value="Clase 2">clase 2</option>
        <option value="Clase 3">clase 3</option>
      </select>
    </div>
    <div class="col-md-3">
      <label for="inCostura" class="form-label fw-bold">Costura</label>
      <select id="inCostura" class="form-select" name="costura" required value="{{old('costura')}}">
        <option selected value="Mano">Mano</option>
        <option value="Computarizado">Computarizado</option>
      </select>
    </div>
    <div class="col-md-3">			   
      <label for="inTalla" class="form-label fw-bold">Tamaño</label>
      <input type="text" class="form-control text-end" id="inTalla" name="talla" required value="{{old('talla')}}">
      @error('talla')
          <p class="text-white bg-danger p-3">*{{$message}}</p>
      @enderror
    </div>
    <div class="col-md-3">
      <label for="inCantidad" class="form-label fw-bold">Cantidad</label>
    <div class="input-group">
      <div class="input-group-text">#</div>
      <input type="number" class="form-control text-end" id="inCantidad" placeholder="1" name="cantidad" required value="{{old('cantidad','1')}}">
      @error('cantidad')
          <p class="text-white bg-danger p-3">*{{$message}}</p>
      @enderror
    </div>
    </div>
    <div class="col-md-3">
        <label for="inPrecio" class="form-label fw-bold">Precio</label>
      <div class="input-group">
        <div class="input-group-text">Q</div>
        <input type="number" class="form-control text-end" id="inPrecio" placeholder="00" name="precio" required value="{{old('precio')}}">
      </div>
    </div>
    @error('precio')
          <p class="text-white bg-danger p-3">*{{$message}}</p>
      @enderror
    <div class="col-12 text-end">
      <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
  </form>

<!--Modal de editor de imagen-->
  <div class="modal fade vh-90" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Editor de imagen</h5>
          </div>
          <div class="modal-body">
            <div class="img-container">
              <div class="row">
                <div class="col-md-8">
                  <img src="" id="sample_image"/>
                </div>
                <div class="col-md-4">
                    <div class="preview"></div>
                </div>
              </div>
            </div>
          </div>
            <div class="modal-footer">
              <button type="button" id="crop" class="btn btn-primary">Cortar</button>
              <button type="button" class="btn btn-secondary" id="cancel">Cancelar</button>
            </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
<script src="js/admin/vibrant.js"></script>
<script src="js/admin/app.js"></script>
@endsection