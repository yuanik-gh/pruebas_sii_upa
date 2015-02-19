<h2>Editar DPA/PTC</h2><hr>
<form class="form-group" id="formAgregarDpaPtc" action="<?= site_url() ?>/dpa_ptc/guardar_cambios_dpa_ptc" method="POST">

    <input hidden name="id_dpa_ptc" value="<?= $id_dpa_ptc ?>">

    <br> <!-- Profesor -->
    <label for="profesor">Profesor</label>
    <input required type="text" class="form-control" name="profesor" id="profesor" value="<?= $profesor ?>">

    <br> <!-- Carrera -->
    <label for="carrera">Carrera</label>
    <select required class="form-control" name="carrera" id="carrera">                                
        <?php foreach ($curso as $c): ?>
            <option value=" <?php echo $c['id_curso'] ?> " <?php if($carrera == $c['id_curso']) {echo 'selected'; } ?> > <?php echo $c['nombre'] ?> </option>
        <?php endforeach; ?>
    </select>

    <br> <!-- Puesto -->
    <label for="puesto">Puesto</label>
    <select required class="form-control" name="puesto" id="puesto">
        <option value="">Selecciona una opción</option>
        <?php foreach ($puestoProfesores as $p): ?>
            <option value=" <?php echo $p['puesto'] ?> " <?php if($puesto == $p['puesto']) {echo 'selected'; } ?> > <?php echo $p['puesto'] ?> </option>
        <?php endforeach; ?>
        
    </select>

    <div class="row">
        <div class="col-md-6 form-group">
            <br> <!-- Fecha de inicio -->
            <label for="fecha_inicio" class=" control-label">Fecha de inicio</label>
            <input required class="datepicker_fecha_inicio form-control" type="text" name="fecha_inicio" id="fecha_inicio" value="<?= $fecha_inicio ?>">
        </div>

        <div class="col-md-6 form-group">
            <br> <!-- Fecha de salida -->
            <label for="fecha_salida">Fecha de salida</label>
            <input required class="datepicker_fecha_fin form-control" type="text" name="fecha_salida" id="fecha_salida" value="<?= $fecha_salida ?>">
        </div>
    </div>

    <hr> <!-- Botones -->
    <div align="right">
        <a type="button" class="btn btn-danger" href="<?= site_url() ?>/dpa_ptc">Cancelar</a>
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</form>