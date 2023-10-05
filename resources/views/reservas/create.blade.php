<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Reservas</h2>
    <form action="{{route('reservas.store')}}" method="post">
    @csrf
        <select name="mesa_id">
            @foreach($mesas as $mesa)
                <option value="{{$mesa->id}}">{{$mesa->id_mesa}}</option>
            @endforeach
        <input list="Usuarios" name="Usuario" id="Usuario1">
        <datalist id="Usuario1">
            @foreach($usuarios as $user)
                <option value="{{$user->id}}">{{$user->id_mesa}}</option>
            @endforeach
        </datalist>
        <input type="datetime-local" name="FechaHora" placeholder="Fecha y Hora">
        <input type="submit" value="Reservar">
    </form>
</body>
</html>