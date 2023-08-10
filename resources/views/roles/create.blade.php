@extends('layouts.app')
@section('content')
<h2>Crear Nuevo Rol</h2>
<form action="{{route('roles.store')}}" method="post">
    @csrf
    <input type="text" name="roles" placeholder="Nombre De rol">
    <input type="submit">
</form>
@endsection