@extends('layouts.adminplant')

@section('titulo', 'Editor de usuario')

@section('r', '../')
@section('recurso')
<link href="../css/admin/dropzone.css" rel="stylesheet">
<link href="../css/admin/main.css" rel="stylesheet">
<link href="../css/admin/cropper.css" rel="stylesheet">
<script src="../js/admin/dropzone.js"></script>
<script src="../js/admin/cropper.js"></script>
@endsection

@section('contenido')
    <div class="col-8 m-auto justify-content-md-center">
    <form class="row text-center" action="{{route('admin.updateu', $user)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="text-center p-3">
            <label for="upload_image">
                <img src="{{$user->avatar}}" id="uploaded_image" class="rounded mx-auto d-block" height="200"/>
                <textarea id="inmGombre" name="image" rows="4" cols="50" style="display: none;">{{$user->avatar}}</textarea>
                <div class="">
                    <div class="text">Subir foto</div>
                </div>
                <input type="file" class="image" id="upload_image" style="display:none" accept="image/*"/>
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
        <input type="text" class="form-control" id="inNombreu" name="usuario" required value="{{old('usuario',$user->usuario)}}">
        </div>
        @error('usuario')
            <p class="text-white bg-danger p-3">*{{$message}}</p>
        @enderror
        <div class="col-md-6 col-lg-12">
        <label for="inNombre" class="form-label fw-bold">Nombre</label>
        <input type="text" class="form-control" id="inNombre" name="nombre" required value="{{old('nombre', $user->nombre)}}">
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
            <label for="intipo" class="form-label fw-bold">Tipo de usuario</label>
            <select id="intipo" class="form-select" name="tipouser" required>
                <optgroup label="Actual">
                    @if ($user->tipo == "admin")
                        <option selected value="{{$user->tipo}}">Administrador</option>                        
                    @else
                        <option selected value="{{$user->tipo}}">Estandar</option>
                    @endif
                </optgroup>
                <optgroup label="Nuevo">
                <option value="admin">Administrador</option>
                <option value="standar">Estandar</option>
                </optgroup>
            </select>
        </div>
        <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
    </div>
@endsection
@section('js')
    <script src="../js/admin/user.js"> </script>
@endsection