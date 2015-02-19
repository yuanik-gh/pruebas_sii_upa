<h2>EDITAR PREGUNTA</h2><hr>

<form class="form-group" id="formAgregarEncuesta" action="<?= site_url() ?>/#" method="POST">

    <!-- Pregunta -->
    <label for="pregunta">Pregunta</label>
    <input required type="text" class="form-control" name="pregunta" id="pregunta" placeholder="Ingresa la pregunta" autofocus>
    <br>

    <label for="pregunta">Orden</label>
    <select id="selectbasic" name="selectbasic" class="form-control">
        <option value="1">Primero</option>
        <option value="2">Segundo</option>
        <option value="3">Tercero</option>
        <option value="4">Cuarto</option>
        <option value="5">Quinto</option>
    </select>
    <br>

    <!-- Opciones -->
    <div class="row">
        <div class="col-xs-6">
            <label for="opcion1">Opcion 1</label>
            <input required type="text" class="form-control" name="opcion1" id="opcion1" placeholder="Ingresa la primera opción" autofocus>
            <br>

            <label for="opcion2">Opcion 2</label>
            <input required type="text" class="form-control" name="opcion2" id="opcion2" placeholder="Ingresa la segunda opción" autofocus>
            <br>
        </div>
        <div class="col-xs-6">
            <label for="opcion3">Opcion 3</label>
            <input required type="text" class="form-control" name="opcion3" id="opcion3" placeholder="Ingresa la primera opción" autofocus>
            <br>

            <label for="opcion4">Opcion 4</label>
            <input required type="text" class="form-control" name="opcion4" id="opcion4" placeholder="Ingresa la segunda opción" autofocus>
            <br>
        </div>
    </div>
    
    <!-- Respuestas -->
    <label for="respuesta">Respuestas</label>
    <select id="respuesta" name="respuesta" class="form-control">
        <option value="">Selecciona una opción</option>
        <option value="1">Primero</option>
        <option value="2">Segundo</option>
        <option value="3">Tercero</option>
        <option value="4">Cuarto</option>
        <option value="5">Quinto</option>
    </select>
    
    <!-- Botones --> <hr>
    <div align="right">
        <a type="button" class="btn btn-danger" href="<?= site_url() ?>/encuestas/preguntas">Cancelar</a>
        <button type="submit" class="btn btn-primary">Agregar preguntas</button>
    </div>

</form>
