<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets</title>
</head>
<body>
    <table>
        <tr>
            <th>Fecha</th>
            <th>Precio</th>
        </tr>
        @foreach ($tickets as $ticket)
        <tr>
            <td>{{ $ticket -> date }}</td>
            <td>{{ $ticket -> price }}</td>
            <td><button type="submit"><a href="{{ route('tickets.edit', $ticket->id) }}">Editar</a></button></td>
            <td>
                <form method="POST" action="{{ route('tickets.destroy', $ticket->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <button type="submit"><a href="{{ route('tickets.create') }}">Crear ticket</a></button>
</body>
</html>