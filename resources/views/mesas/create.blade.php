<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Nuevo Mesa</h3>
    <div>
        <form action="{{route('mesas.store')}}" method="post">
            @csrf
            <input type="number" name="capacidad" placeholder="Capacidad de la mesa...">
            <input type="text" name="id_mesa" placeholder="Id_mesa..">
            <select name="estado">
                <option value="0">Cerrada</option>
                <option value="1">Abierta</option>
            </select>
            <input type="submit" name="cargar">
        </form>
    </div>
</body>
</html>