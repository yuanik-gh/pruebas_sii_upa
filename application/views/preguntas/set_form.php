<h2>Agregar pregunta</h2><hr>

<form class="form-group" id="formAgregarPregunta" action="<?=site_url()?>/#" method="POST">

    <!-- Pregunta -->
    <label for="textopregunta">Pregunta</label>
    <input required type="text" class="form-control" name="textopregunta" id="textopregunta" placeholder="Ingresa la pregunta" autofocus>
    <br>
    
    <label for="opcion1">Tipo</label>
    <input required type="text" class="form-control" name="opcion2" id="opcion1" placeholder="Ingresa la segunda opción" autofocus>
    <br>

    <!-- Opciones -->
    <div class="row">
        <div class="col-xs-6">
            <label for="opcion1">Categoría</label>
            <select id="selectbasic" name="selectbasic" class="form-control">
                <option value="">Seleciona una opción</option>
                <?php
                foreach ($categorias as $c) {
                    echo "<option value=" . $c['idcategoria_en'] . ">" . $c['categoria_en'] . "</option>";
                }
                ?>
            </select>
            <br>

            <label for="opcion1">Encuesta</label>
            <select id="selectbasic" name="selectbasic" class="form-control">
                <option value="">Seleciona una opción</option>
                <?php
                foreach ($encuestas as $e) {
                    echo "<option value=" . $e['idencuesta'] . ">" . $e['nombre'] . "</option>";
                }
                ?>
            </select>
            <br>
            
        </div>
        <div class="col-xs-6">
            <label for="opcion1">Estatus</label>
            <select id="estatus" name="estatus" class="form-control" required>
                <option value="">Selecciona una opción</option>
                <option value="0">Inactiva</option>
                <option value="1">Activa</option>
            </select>
            <br>
            
            <label for="opcion1">Orden</label>
            <input type="text" class="form-control bfh-number" data-min="0" data-max="10" data-wrap="true">
            <br>

        </div>
    </div>
    
    <!-- Botones --> <hr>
    <div align="right">
        <a type="button" class="btn btn-danger" href="<?= site_url() ?>/preguntas">Cancelar</a>
        <button type="submit" class="btn btn-primary">Agregar pregunta</button>
    </div>

</form>
