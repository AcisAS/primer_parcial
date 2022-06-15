<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>

    <table>
        <tr>
            <th rowspan="2">Nombre</th>
            <th colspan="3">Horas</th>
        </tr>
        <tr>
            <th>Clase</th>
            <th>Taller</th>
            <th>Laboratorio</th>
        </tr>
        @foreach ($unidades as $unidad)
            <tr>
                <td>{{ $unidad->nombre }}</td>
                <td>{{ $unidad->horas_clase }}</td>
                <td>{{ $unidad->horas_taller }}</td>
                <td>{{ $unidad->horas_laboratorio }}</td>
            </tr>
        @endforeach

    </table>
</body>

</html>
