<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Pasajeros</th>
            <th>Año</th>
        </tr>
        @foreach ($trains as $train)
        <tr>
            <td>{{ $train -> name }}</td>
            <td>{{ $train -> passengers }}</td>
            <td>{{ $train -> year }}</td>
            <td><button type="submit"><a href="{{ route('trains.edit', $train->id) }}">Editar</a></button></td>
            <td>
                <form method="POST" action="{{ route('trains.destroy', $train->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <button type="submit"><a href="{{ route('trains.create') }}">Crear tren</a></button>
</body>
</html>