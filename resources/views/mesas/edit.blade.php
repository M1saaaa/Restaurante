<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Editar Mesa</h3>
    <div>
        <form action="{{route('mesas.update', $mesa->id)}}" method="post">
        @method ('patch')
            @csrf
            <input type="number" name="capacidad" value="{{$mesa-> capacidad}}" placeholder="Capacidad de la mesa...">
            <input type="text" name="usuario" value="{{$mesa->usuario}}" placeholder="usuario...">
        </form>
    </div>
</body>
</html>