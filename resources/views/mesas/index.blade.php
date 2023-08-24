<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>mesa</h1>
    <a href="{{route('mesas.create')}}">Crear Nueva mesa</a>
    <table>
        @foreach($mesas as $mesa)
        <tr>
            <td>{{$mesa->capacidad}}</td>
            <td>{{$mesa->usuario}}</td>
            <td><a href="{{route('mesas.edit', $mesa->id )}}">Editar mesa</a></td>
            <td><form action="{{route('mesas.destroy', $mesa->id)}}" method="POST">  @csrf @method('delete')
                <button>Borrar</button>
            </form></td>


        </tr>
        @endforeach
    </table>
</body>

</html>