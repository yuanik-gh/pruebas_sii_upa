<h2>Editar encuesta</h2><hr>

<form class="form-group" id="formEditarEncuesta" action="<?= site_url() ?>/encuestas/update" method="POST">
    
    <input hidden name="idencuesta" value="<?= $idencuesta ?>">

    <div class="row">
        <div class="col-lg-9">
            <!-- Nombre de encuesta -->
            <label for="nombre">Nombre de la encuesta</label>
            <input required type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa el nombre de la encuesta" autofocus required value="<?= $nombre ?>">
            <br>
        </div>
        <div class="col-lg-3">
            <!-- Estarud de encuesta -->
            <label for="estatus">Estatus</label>
            <select id="estatus" name="estatus" class="form-control" required>
                <?php for($i = 0; $i <= 1; $i++) { ?>
                    <option value=" <?php echo $i ?> " <?php if($estatus == $i) {echo 'selected'; } ?> > <?php echo ($i == 0) ? "Inactiva" : "Activa" ?> </option>
                <?php } ?>
            </select>
        </div>
    </div>

    <!-- Descripción de encuesta -->
    <label for="descripcion" class=" control-label">Descripción de encuesta</label>
    <textarea class="form-control" rows="5" name="descripcion" id="descripcion" placeholder="Ingresa una descripción"><?= $descripcion ?></textarea><br>

    <!-- Botones --> <hr>
    <div align="right">
        <a type="button" class="btn btn-danger" href="<?= site_url() ?>/encuestas">Cancelar</a>
        <button type="submit" class="btn btn-primary">Editar encuesta</button>
    </div>

</form>