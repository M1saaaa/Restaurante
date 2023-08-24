@extends('layouts.app')
@section('content')

<h2>Listado de permisos</h2>

<a href="{{route('permisos.create')}}">Crear Nuevo Permiso</a>
    <table>
        @foreach($permisos as $permiso)
        <tr>
            <td>{{$permiso->name}}</td>
            <td>{{$permiso->guard_name}}</td>
            <td><a href="{{route('permisos.edit', $permiso->id )}}">Editar Permiso</a></td>
            <td><form action="{{route('permisos.destroy', $permiso->id)}}" method="POST">  @csrf @method('delete')
                <button>Borrar</button>
            </form></td>
        </tr>
        @endforeach
    </table>
   

@endsection