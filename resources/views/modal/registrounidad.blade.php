<section class="modal" id="modal">
    <article>
        <h1>Registro de Unidad</h1>
        <form method="POST" action="{{ route('registrarUnidad') }}" id="modal-contenido">
            @csrf
            <div>
                <label for="id">Id:</label>
                <input type="number" name="id" required>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>
                <label for="hclase">Horas Clase:</label>
                <input type="number" name="hclase" required>
                <label for="htaller">Horas Taller:</label>
                <input type="number" name="htaller" required>
                <label for="hlaboratorio">Horas Laboratorio:</label>
                <input type="number" name="hlaboratorio" required>
            </div>
            <div class="contenedor-botones">
                <input type="submit" value="Registrar" class="btn-registrar">
                <input type="button" value="Cancelar" class="btn-cancelar" onclick="cancelar()">
            </div>
        </form>
    </article>
</section>
