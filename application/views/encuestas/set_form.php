<h2>Agregar encuesta</h2><hr>

<form class="form-group" id="formAgregarEncuesta" action="<?= site_url() ?>/encuestas/set" method="POST">

    <div class="row">
        <div class="col-lg-9">
            <!-- Nombre de encuesta -->
            <label for="nombre">Nombre de la encuesta</label>
            <input required type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa el nombre de la encuesta" autofocus required>
            <br>
        </div>
        <div class="col-lg-3">
            <!-- Estarud de encuesta -->
            <label for="estatus">Estatus</label>
            <select id="estatus" name="estatus" class="form-control" required>
                <option value="">Selecciona una opción</option>
                <option value="0">Inactiva</option>
                <option value="1">Activa</option>
            </select>
        </div>
    </div>

    <!-- Descripción de encuesta 
    <label for="descripcion" class=" control-label">Descripción de encuesta</label>
    <textarea class="form-control" rows="5" name="descripcion" id="descripcion" placeholder="Ingresa una descripción"></textarea><br>
-->
    <!-- Botones --> <hr>
    <div align="right">
        <a type="button" class="btn btn-danger" href="<?= site_url() ?>/encuestas">Cancelar</a>
        <button type="submit" class="btn btn-primary">Agregar encuesta</button>
    </div>

</form>