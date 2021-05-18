@extends('layouts.adminplant')

@section('titulo', 'Inventario')

@section('recurso')
    <link href="../css/admin/dropzone.css" rel="stylesheet">
    <link href="../css/admin/main.css" rel="stylesheet">
    <link href="../css/admin/cropper.css" rel="stylesheet">
    <script src="../js/admin/dropzone.js"></script>
    <script src="../js/admin/cropper.js"></script>
<style type="text/css">
    .card{
        height: 350px;
        max-width: 200px;
        min-width: 170px;
    }
</style>
@endsection

@section('r', '../')


@section('contenido')
    <form class="row text-center" action="{{route('admin.update', $item)}}" method="POST">
        @csrf
        @method('PUT')
          <div class="text-center">
              <label for="upload_image">
                  <img src="{{$item->imagen}}" id="uploaded_image" class="rounded mx-auto d-block" height="150"/>
                  <textarea id="inmGombre" name="image" rows="4" cols="50" style="display: none;" required>{{$item->imagen}}</textarea>
                  <div class="">
                      <div class="text">Cambiar foto</div>
                  </div>
                  <input type="file" class="image" id="upload_image" style="display:none" accept="image/png"/>
                  <div class="row" id="colors">
                      <input value="{{$item->color1}}" name="Vibrant" class="col form-control m-1" style="color:{{$item->color1}}; background-color:{{$item->color1}};"/>
                      <input value="{{$item->color2}}" name="Muted" class="col form-control m-1" style="color:{{$item->color2}}; background-color:{{$item->color2}};"/>
                      <input value="{{$item->color3}}" name="DarkVibrant" class="col form-control m-1" style="color:{{$item->color3}}; background-color:{{$item->color3}};"/>
                      <input value="{{$item->color4}}" name="DarkMuted" class="col form-control m-1" style="color:{{$item->color4}}; background-color:{{$item->color4}};"/>
                      <input value="{{$item->color5}}" name="LightVibrant" class="col form-control m-1" style="color:{{$item->color5}}; background-color:{{$item->color5}};"/>
                  </div>
              </label>
              @error('image')
              <p class="text-white bg-danger p-3">*{{$message}}</p>
              @enderror
          </div>
        <div class="col-md-6">
          <label for="inCategoria" class="form-label fw-bold">Categoria</label>
          <select id="inCategoria" class="form-select" name="categoria" required>
            <optgroup label="Actual">
            <option selected value="{{$item->categoria}}">{{$item->categoria}}</option>
            </optgroup>
            <optgroup label="Nuevo">
              <option value="Blusas">Blusas</option>
              <option value="Fajas">Fajas</option>
              <option value="Cortes">Cortes</option>
              <option value="Zapatos">Zapatos</option>
            </optgroup>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inNombre" class="form-label fw-bold">Nombre</label>
          <input type="text" class="form-control" id="inNombre" name="nombre" required value="{{old('nombre', $item->nombre)}}">
        </div>
        @error('nombre')
        <p class="text-white bg-danger p-3">*{{$message}}</p>
        @enderror
        <div class="col-md-6">
          <label for="inMaterial" class="form-label fw-bold">Estilo</label>
          <input type="text" class="form-control" id="inMaterial" name="estilo" required value="{{old('estilo', $item->estilo)}}">
        </div>
        @error('estilo')
        <p class="text-white bg-danger p-3">*{{$message}}</p>
        @enderror
        <div class="col-md-6">
          <label for="inRegion" class="form-label fw-bold">Región</label>
          <input type="text" class="form-control" id="inRegin" name="tipico" value="{{old('tipico', $item->tipico)}}">
        </div>
        <div class="col-md-6">
          <label for="inClase" class="form-label fw-bold">Clase</label>
          <select id="inClase" class="form-select" name="clase" required>
            <optgroup label="Actal">
              <option selected value="{{$item->clase}}">{{$item->clase}}</option>
            </optgroup>
            <optgroup label="Nuevo">
              <option value="Clase 1">Clase 1</option>
              <option value="Clase 2">clase 2</option>
              <option value="Clase 3">clase 3</option>
            </optgroup>
          </select>
        </div>
        <div class="col-md-3">
          <label for="inCostura" class="form-label fw-bold">Costura</label>
          <select id="inCostura" class="form-select" name="costura" required>
            <optgroup label="Actual">
              <option selected value="{{$item->costura}}">{{$item->costura}}</option>
            </optgroup>
            <optgroup label="Nuevo">
              <option value="Mano">Mano</option>
              <option value="Computarizado">Computarizado</option>
            </optgroup>
          </select>
        </div>
        <div class="col-md-3">			   
          <label for="inTalla" class="form-label fw-bold">Tamaño</label>
          <input type="text" class="form-control text-end" id="inTalla" name="talla" required value="{{old('talla', $item->talla)}}">
        </div>
        @error('talla')
        <p class="text-white bg-danger p-3">*{{$message}}</p>
        @enderror
        <div class="col-md-3">
          <label for="inCantidad" class="form-label fw-bold">Cantidad</label>
        <div class="input-group">
          <div class="input-group-text">#</div>
          <input type="number" class="form-control text-end" id="inCantidad" placeholder="1" name="cantidad" required value="{{old('cantidad', $item->cantidad)}}">
        </div>
        </div>
        @error('cantidad')
        <p class="text-white bg-danger p-3">*{{$message}}</p>
        @enderror
        <div class="col-md-3">
            <label for="inPrecio" class="form-label fw-bold">Precio</label>
          <div class="input-group">
            <div class="input-group-text">Q</div>
            <input type="number" class="form-control text-end" id="inPrecio" placeholder="00" name="precio" required value="{{old('precio', $item->precio)}}">
          </div>
        </div>
        @error('precio')
        <p class="text-white bg-danger p-3">*{{$message}}</p>
        @enderror
        <div class="row">
            <div class="col-md-3">
                <div class="form-check">
                  <label class="form-check-label" for="existencia">Sin existencia</label>
                  <select id="existencia" class="form-select" name="existe" required>
                    <option selected value="{{$item->existencia}}">Existente</option>
                    <option value="0">Sin existencia</option>
                  </select>
                </div>
              </div>
        </div>        
        <div class="col-12 text-end">
          <button type="submit" class="btn btn-primary">Actualizar</button>
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
<script src="../js/admin/vibrant.js"></script>
<script src="../js/admin/app.js"></script>
@endsection