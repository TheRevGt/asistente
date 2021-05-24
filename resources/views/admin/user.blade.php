@extends('layouts.adminplant')

@section('titulo', 'Registrar usuario')

@section('recurso')
<link href="css/admin/dropzone.css" rel="stylesheet">
<link href="css/admin/main.css" rel="stylesheet">
<link href="css/admin/cropper.css" rel="stylesheet">
<script src="js/admin/dropzone.js"></script>
<script src="js/admin/cropper.js"></script>
<style>
  .ocultar {
    display: none;
}
.mostrar {
    display: block;
}
</style>
@endsection

@section('contenido')
<div class="col-8 m-auto justify-content-md-center">
<form class="row text-center m-2" action="{{route('admin.users')}}" method="POST">
    @csrf
      <div class="text-center p-3">
          <label for="upload_image">
              <img src="img/camara.png" id="uploaded_image" class="rounded mx-auto d-block" height="100"/>
              <textarea id="inmGombre" name="image" rows="4" cols="50" style="display: none;"></textarea>
              <div class="">
                  <div class="text">Subir foto</div>
              </div>
              <input type="file" class="image" id="upload_image" style="display:none" accept="image/*" required/>
        </label>
      </div>
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
    <div class="col-md-6 col-lg-12">
      <label for="inNombreu" class="form-label fw-bold">Nombre de usuario</label>
      <input type="text" class="form-control" id="inNombreu" name="usuario" required value="{{old('usuario')}}">
    </div>
    @error('usuario')
        <p class="text-white bg-danger p-3">*{{$message}}</p>
    @enderror
    <div class="col-md-6 col-lg-12">
      <label for="inNombre" class="form-label fw-bold">Nombre</label>
      <input type="text" class="form-control" id="inNombre" name="nombre" required value="{{old('nombre')}}">
    </div>
    <div class="col-md-6 col-lg-12">
      <label for="inPassword" class="form-label fw-bold">Contraseña</label>
      <input type="text" class="form-control" id="inPassword" name="password" id="password" value="{{old('password')}}">
    </div>
    <div class="col-md-6 col-lg-12">
        <label for="inPasswordu" class="form-label fw-bold">Confirmar Contraseña</label>
        <input type="text" class="form-control" id="inPasswordu" name="password_confirmation" id="passwordv">
    </div>
    @error('password')
        <p class="text-white bg-danger p-3">*{{$message}}</p>
    @enderror
    <div class="col-md-6 col-lg-12">
      <label for="inTipo" class="form-label fw-bold">Tipo usuario</label>
      <select id="inTipo" class="form-select" name="tipouser" required value="{{old('tipouser')}}">
        <option selected value="admin">Administrador</option>
        <option value="standar">Estandar</option>
      </select>
    </div>
    <div class="col-12 text-end">
      <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
    
  </form>
</div>
@endsection

@section('js')
<script src="js/admin/user.js"></script>
@endsection