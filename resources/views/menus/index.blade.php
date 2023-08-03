<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Menus</h1>
    <a href="{{route('menus.create')}}">Crear Nuevo Menu</a>
    <table>
        @foreach($menus as $menu)
        <tr>
            <td>{{$menu->precio}}</td>
            <td>{{$menu->nombres}}</td>
            <td>{{$menu->tipo}}</td>
            <td><a href="{{route('menus.edit', $menu-> id )}}">Editar Menu</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>