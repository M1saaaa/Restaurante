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
        <form action="{{ route('mesas.update', $mesa->id) }}" method="post">
            @method ('patch')
            @csrf
            <input type="number" name="capacidad" value="{{ $mesa->capacidad }}" placeholder="Capacidad de la mesa...">
            <select name="estado">
                <option value="0" @if ($mesa->estado=="0")  selected @endif>Cerrada</option>
                <option value="1" @if ($mesa->estado=="1")  selected @endif>Abierta</option>
            </select>
            <input type="hidden" name="id_mesa" value="{{$mesa->id_mesa}}">
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>

</html>
