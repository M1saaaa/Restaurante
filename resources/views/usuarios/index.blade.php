@extends('layouts.app')
@section('content')

<h2>Listado de usuarios</h2>
    <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Email</td>
        <td>Teléfono</td>
    </tr>
    <table>
        @foreach($usuarios as $usuario)  
        <tr>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->apellido}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->telefono}}</td>
        </tr>
        @endforeach
    </table>
   

@endsection