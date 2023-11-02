<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>reserva</h1>
    <a href="{{route('reservas.create')}}">Crear Nueva reserva</a>
    <table>
        @foreach($reservas as $reserva)
        <tr>
            <td>{{$reserva->CantClientes}}</td>
            <td>{{$reserva->usuario->name}}</td>
            <td>{{$reserva->FechaHora}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>