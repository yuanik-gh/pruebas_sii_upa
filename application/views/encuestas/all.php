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
            foreach ($encuestas->result() as $row): ?>
                <tr>
                    <td><?php echo $row->nombre; ?></td>
                    <td><?php echo $row->estatus; ?></td>
                    <td><?php echo $row->descripcion; ?></td>
                    <td>
                        <a type="button" class="btn btn-default" aria-label="Left Align" href="<?=site_url()?>/encuestas/update_form/<?=$row->idencuesta?>">
                            <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                        </a>
                        <a type="button" class="btn btn-default" aria-label="Left Align" href="<?=site_url()?>/encuestas/delete/<?=$row->idencuesta?>">
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