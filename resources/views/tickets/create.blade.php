<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crear tren</title>
</head>
<body>
    <form method="POST" action="{{ route('tickets.store') }}">
        @csrf
        <label for="date">Fecha</label>
        <input type="date" name="date" id="date"><br><br>
        <label for="precio">Precio</label>
        <input type="number" name="price" id="price"><br><br>
        <label for="year">Año</label>
        <input type="number" name="year" id="year"><br><br>
        <label for="ticket_type_id">Ticket type</label>
        <select name="ticket_type_id" id="ticket_type_id">
            @foreach ($ticketTypes  as $ticketType)
                <option value="{{ $ticketType->id }}">{{ $ticketType->type }}</option>
            @endforeach
        </select>
        <label for="train_id">Train</label>
        <select name="train_id" id="train_id">
            @foreach ($trains as $train)
            <option value="{{ $train->id }}">{{ $train->name }}</option>
            @endforeach
        </select>
        <button type="submit">Crear</button>
        </form>
</body>
</html>