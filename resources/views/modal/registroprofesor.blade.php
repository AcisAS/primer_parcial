<section class="modal" id="modal">
    <article>
        <h1>Registro de Profesor</h1>
        <form method="POST" action="{{ route('registrarProfesor') }}" id="modal-contenido">
            @csrf
            <div>
                <label for="id">Id:</label>
                <input type="number" name="id" required>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" required>
                <label for="rfc">RFC:</label>
                <input type="text" name="rfc" maxlength="13" minlength="13" required>
            </div>
            <div class="contenedor-botones">
                <input type="submit" value="Registrar" class="btn-registrar">
                <input type="button" value="Cancelar" class="btn-cancelar" onclick="cancelar()">
            </div>
        </form>
    </article>
</section>
