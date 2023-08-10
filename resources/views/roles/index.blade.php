@extends('layouts.app')
@section('content')

<h2>Listado de Roles</h2>

<a href="{{route('roles.create')}}">Crear Nuevo Rol</a>
    <table>
        @foreach($roles as $role)
        <tr>
            <td>{{$role->name}}</td>
            <td>{{$role->guard_name}}</td>
            <td><a href="{{route('roles.edit', $role->id )}}">Editar Rol</a></td>
        </tr>
        @endforeach
    </table>
   

@endsection