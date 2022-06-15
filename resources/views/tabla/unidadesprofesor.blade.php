@extends('principal')
@section('inicio')
    <a href="{{ route('consulta_general_profesores') }}">Regresar</a>
@endsection

@section('contenido')
    <section>
        @foreach ($profesor as $prof)
            <p><strong>Id: {{ $prof->idProfesor }}
                    <br>Profesor: {{ $prof->nombre . ' ' . $prof->apellido }}
                    <br> RFC: {{ $prof->rfc }}
                </strong></p>
        @endforeach

    </section>
    <section>
        <table>
            <tr>
                <th rowspan="2">Nombre de Unidad</th>
                <th colspan="3">Horas</th>
            </tr>
            <tr>
                <th>Clase</th>
                <th>Taller</th>
                <th>Laboratorio</th>
            </tr>
            @foreach ($unidadesprofesor as $unidad)
                <tr>
                    <td>{{ $unidad->nombre }}</td>
                    <td>{{ $unidad->horas_clase }}</td>
                    <td>{{ $unidad->horas_taller }}</td>
                    <td>{{ $unidad->horas_laboratorio }}</td>
                </tr>
            @endforeach

        </table>
    </section>
@endsection
