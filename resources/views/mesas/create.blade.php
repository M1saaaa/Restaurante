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
            <input type="text" name="usuarios" placeholder="Usuario...">
            <input type="submit" name="cargar">
        </form>
    </div>
</body>
</html>