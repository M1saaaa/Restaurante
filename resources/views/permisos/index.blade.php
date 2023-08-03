@extends('layouts.app')
@section('content')

<h2>Crear Nuevo Permiso</h2>

<a href="{{route('permisos.create')}}">Crear Nuevo permiso</a>
    <table>
        @foreach($permisos as $permiso)
        <tr>
            <td>{{$permiso->name}}</td>
            <td>{{$permiso->what_name}}</td>
            <td><a href="{{route('permisos.edit', $permiso->id )}}">Editar permiso</a></td>
        </tr>
        @endforeach
    </table>

@endsection