@extends('principal')
@section('contenido')
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
@endsection
