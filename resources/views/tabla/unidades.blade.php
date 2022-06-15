@extends('principal')
@section('registro')
    <button class="btn-nuevo-registro btn-registrar"
        onclick="document.getElementById('modal').style.display='block'">Registrar una nueva Unidad</button>
@endsection
@section('contenido')
    <section>
        <table>
            <tr>
                <th rowspan="2">Nombre</th>
                <th colspan="3">Horas</th>
                <th rowspan="2"></th>
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
                    <td><button class="btn btn-eliminar"><i class="fa fa-trash"></i></button></td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection
@section('modal')
    @include('modal.registrounidad')
@endsection
