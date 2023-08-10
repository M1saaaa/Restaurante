@extends('layouts.app')
@section('content')
<h2>Editar Permiso</h2>
<form action="{{route('permisos.update',$permiso->id)}}" method="post">
    @method ('patch')
    @csrf
    <input type="text" name="permisos" placeholder="Nombre De permiso" value="{{$permiso->name}}">
    <input type="submit">
</form>
@endsection