<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crear tren</title>
</head>
<body>
    <form method="POST" action="{{ route('trains.store') }}">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name"><br><br>
        <label for="passengers">Pasajeros</label>
        <input type="number" name="passengers" id="passengers"><br><br>
        <label for="year">Año</label>
        <input type="number" name="year" id="year"><br><br>
        <label for="train_type">Tipo Tren</label>
        <select name="train_type_id" id="train_type_id">
            @foreach ($trainTypes as $trainType)
                <option value="{{ $trainType->id }}">{{ $trainType->type }}</option>
            @endforeach
        </select>
        <button type="submit">Crear</button>
        </form>
</body>
</html>