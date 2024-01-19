<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit </title>
</head>
<body>
    <form method="POST" action="{{ route('tickets.update', $ticket) }}">
        @csrf
        @method('PUT')
        <label for="date">Date</label>
        <input type="date" name="date" id="date" value="{{ $ticket->date }}">
        <label for="price">Price</label>
        <input type="number" name="price" id="price" value="{{ $ticket->price }}">
        <label for="ticket_type_id">Ticket type</label>
        <select name="ticket_type_id" id="ticket_type_id">
            @foreach ($ticketTypes as $ticketType)
                <option value="{{ $ticketType->id }}"
                    {{ $ticketType->id == $ticket->ticket_type_id ? 'selected' : '' }}>{{ $ticketType->type }}</option>
            @endforeach
        </select>
        <label for="train_id">Train</label>
        <select name="train_id" id="train_id">
            @foreach ($trains as $train)
                <option value="{{ $train->id }}" {{ $train->id == $ticket->train_id ? 'selected' : '' }}>
                    {{ $train->name }}</option>
            @endforeach
        </select>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>