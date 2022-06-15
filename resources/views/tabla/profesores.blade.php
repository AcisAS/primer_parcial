@extends('principal')
@section('registro')
    <button class="btn-nuevo-registro btn-registrar"
        onclick="document.getElementById('modal').style.display='block'" id="registro">Registrar a un nuevo Profesor</button>
@endsection

@section('contenido')
    <section>
        <table>
            <tr>
                <th>ID</th>
                <th>Profesor</th>
                <th>RFC</th>
                <th></th>{{-- encabezado utilizado para la opcion de consulta --}}
                <th></th>{{-- encabezado utilizado para la opcion de edición --}}
            </tr>
            @foreach ($profesores as $profesor)
                <tr>
                    <td>{{ $profesor->idProfesor }}</td>
                    <td>{{ $profesor->nombre . ' ' . $profesor->apellido }}</td>
                    <td>{{ $profesor->rfc }}</td>

                    <td>
                        <form action="{{ route('eliminarProfesor') }}" method="POST">
                            @csrf
                            <input type="numer" name="id" hidden value="{{ $profesor->idProfesor }}">
                            <button class="btn btn-eliminar"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>

                    <td>
                        <form action="{{ route('obtenerUnidadesProfesor') }}" method="POST">
                            @csrf
                            <input type="numer" name="id" hidden value="{{ $profesor->idProfesor }}">
                            <button class="btn btn-consultar"><i class="fa fa-search"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection
@section('modal')
    @include('modal.registroprofesor')
@endsection
