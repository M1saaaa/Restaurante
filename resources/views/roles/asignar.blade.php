<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>{{$role->name}}</h2>
    <form action="{{route('roles.asignarStore',$role->id)}}" method="post">
    @csrf
        @foreach($permisos as $permiso)
            <input name="permiso[]" type="checkbox" value="{{$permiso->id}}">
            <label for="">{{$permiso->name}}</label>
            <br>
        @endforeach
        <input type="submit" name="Asignar">
    </form>
</body>
</html>