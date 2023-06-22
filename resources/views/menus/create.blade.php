<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Nuevo Menu</h3>
    <div>
        <form action="{{route('menus.store')}}" method="post">
            @csrf
            <input type="text" name="nombres" placeholder="Nombre Del Menú...">
            <input type="text" name="tipo" placeholder="Tipo Del Menú...">
            <input type="number" name="precio" placeholder="Precio Del Menú...">
            <input type="submit" name="cargar">
        </form>
    </div>
</body>
</html>