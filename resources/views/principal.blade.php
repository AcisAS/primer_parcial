<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Catalogo Profesore</title>
</head>

<body>

    <nav class="menu">
        <h1>Catalogo Profesores</h1>
        <a href="{{ route('consulta_general_profesores') }}">Profesores</a>
        <a href="{{ route('consulta_general_unidades') }}">Unidades de Aprendizaje</a>
    </nav>
    @yield('registro')
    @yield('contenido')
    @yield('modal')
</body>

</html>
