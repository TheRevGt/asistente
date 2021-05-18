@extends('layouts.adminplant')

@section('titulo', 'Usuarios')

@section('contenido')
<table class="table ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Usuario</th>
        <th scope="col">Nombre</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr class="align-middle">
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->usuario}}</td>
            <td>{{$user->nombre}}</td>
            <td>
                <img class="rounded-circle me-2" src="{{$user->avatar}}" width="150" height="150"/>
            </td>
            <td>
                <div class="btn-group-sm text-end">
                    <a href="{{route('admin.editu', $user->id)}}" class="btn btn-sm btn-outline-secondary">Editar</a>
                </div>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection