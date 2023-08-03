@extends('layouts.app')
@section('content')
<h2>Crear Nuevo Permiso</h2>
<form action="{{route('permisos.store')}}" method="post">
    @csrf
    <input type="text" name="permisos" placeholder="Nombre De permiso">
    <input type="submit">
</form>
@endsection