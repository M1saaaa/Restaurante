<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Editar Menu</h3>
    <div>
        <form action="{{route('menus.update', $menu->id)}}" method="post">
        @method ('patch')
            @csrf
            <input type="text" name="nombres" value="{{$menu-> nombres}}" placeholder="Nombre Del Menú...">
            <input type="text" name="tipo" value="{{$menu->tipo}}" placeholder="Tipo Del Menú...">
            <input type="number" name="precio" value="{{$menu->precio}}" placeholder="Precio Del Menú...">
            <input type="submit" name="cargar">
        </form>
    </div>
</body>
</html>