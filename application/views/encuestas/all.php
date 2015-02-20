<h2>ENCUESTAS</h2><hr>

<table class="table table-striped" id="dataTable">
    <thead>    
        <tr>
            <th>Nombre de encuesta</th>
            <th>Estado</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>        
        
        <?php if ($encuestas != NULL) {
            foreach ($encuestas as $e): ?>
                <tr>
                    <td><?php echo $e['nombre']; ?></td>
                    <td><?php echo $e['estatus']; ?></td>
                    <td><?php echo $e['descripcion']; ?></td>
                    <td>
                        <a type="button" class="btn btn-default" aria-label="Left Align" href="<?=site_url()?>/preguntas/set_form/<?=$e['idencuesta']?>">
                            <span class='glyphicon glyphicon-plus' aria-hidden='true'></span>
                        </a>
                        <a type="button" class="btn btn-default" aria-label="Left Align" href="<?=site_url()?>/encuestas/update_form/<?=$e['idencuesta']?>">
                            <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                        </a>
                        <a type="button" class="btn btn-default" aria-label="Left Align" href="<?=site_url()?>/encuestas/delete/<?=$e['idencuesta']?>">
                            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                        </a>
                    </td>
                </tr>
        <?php endforeach;  
        } ?>
        
    </tbody>
</table>

<hr> <!-- Botones -->
<div align="right">
    <button type="button" class="btn btn-danger">Cancelar</button>
    <a type="button" class="btn btn-primary" href="<?= site_url() ?>/encuestas/set_form">Agregar encuesta</a>
</div>