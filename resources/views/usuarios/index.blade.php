@extends('layouts.app')
@section('content')

<h2>Listado de usuarios</h2>

<a href="{{route('usuarios.create')}}">Crear Nuevo Rol</a>
    <table>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->guard_name}}</td>
            <td><a href="{{route('usuarios.edit', $usuario->id )}}">Editar Usuarios</a></td>
        </tr>
        @endforeach
    </table>
   

@endsection