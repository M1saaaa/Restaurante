@extends('layouts.app')
@section('content')
<h2>Crear Nuevo Rol</h2>
<form action="{{route('usuarios.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nombre">
    <input type="text" name="apellido" placeholder="Apellido">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Contrasena">
    <input type="submit" value="Crear">
</form>
@endsection