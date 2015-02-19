<h2>Agregar competencia</h2><hr>

<form class="form-group" id="formAgregarCompetencia" action="<?= base_url() ?>index.php/competencias/guardar_competencia" method="POST">

    <label for="fecha_inicio" class=" control-label">Competencias</label>
    <textarea class="form-control" rows="5" name="competencia" id="competencia"></textarea><br>

    <div class="row">
        <div class="col-md-3">
            <label>Cuatrimestre</label>
            <select class="form-control" name="cuatrimestre" id="cuatrimestre">
                <option value="primero">Primero</option>
                <option value="segundo">Segundo</option>
                <option value="tercero">Tercero</option>
                <option value="cuarto">Cuarto</option>
                <option value="quinto">Quinto</option>
                <option value="sexto">Sexto</option>
                <option value="septimo">Septimo</option>
                <option value="octavo">Octavo</option>
                <option value="noveno">Noveno</option>
                <option value="decimo">Decimo</option>
            </select>
        </div>

        <div class="col-md-3">
            <label>Especialidad</label>
            <select class="form-control" name="especialidad" id="especialidad">
                <option value="redes">Redes</option>
                <option value="software">Software</option>
            </select>
        </div>

    </div>

    <hr>
    <div align="right">
        <a type="button" class="btn btn-danger" href="<?= base_url() ?>index.php/competencias">Cancelar</a>
        <button type="submit" class="btn btn-primary" name="agregarCompetencia" id="agregarCompetencia">Agregar competencia</button>
    </div>

</form>