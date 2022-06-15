@extends('principal')
@section('contenido')
    <table>
        <tr>
            <th>Profesor</th>
            <th>RFC</th>
            <th></th>{{-- encabezado utilizado para la opcion de consulta --}}
            <th></th>{{-- encabezado utilizado para la opcion de edición --}}
        </tr>
        @foreach ($profesores as $profesor)
            <tr>
                <td>{{ $profesor->nombre . ' ' . $profesor->apellido }}</td>
                <td>{{ $profesor->rfc }}</td>
                <td><button class="btn btn-eliminar"><i class="fa fa-trash"></i></button></td>
                <td><button class="btn btn-consultar"><i class="fa fa-search"></i></button></td>
            </tr>
        @endforeach
    </table>
@endsection
