@extends('layouts.app')
@section('content')
<h2>Editar Rol</h2>
<form action="{{route('roles.update',$role->id)}}" method="post">
    @method ('patch')
    @csrf
    <input type="text" name="roles" placeholder="Nombre De role" value="{{$role->name}}">
    <input type="submit">
</form>
@endsection