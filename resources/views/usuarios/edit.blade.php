@extends('layouts.app')
@section('content')
<h2>Editar Rol</h2>
<form action="{{route('usuarios.update',$usuario->id)}}" method="post">
    @method ('patch')
    @csrf
    <input type="text" name="name" placeholder="Nombre" value="{{$usuario->name}}">
    <input type="text" name="apellido" placeholder="Apellido" value="{{$usuario->apellido}}">
    <input type="email" name="email" placeholder="Email" value="{{$usuario->email}}">
    <input type="submit" value="Cambiar">
</form>
@endsection