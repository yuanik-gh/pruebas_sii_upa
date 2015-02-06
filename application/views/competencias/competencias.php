			<h2>Competencias</h2><hr>

			<table class="table table-striped display" id="dataTable"> <!-- Tabla de competencias -->
                            <thead>
                                <tr>
                                    <th>Nombre de competencia</th>
                                    <th>Cuatrimestre</th>
                                    <th>Especialidad</th>
                                    <th>Opciones</th>
                                </tr>	
                            </thead>
                            <tbody>

                                <?php
                                    if ($competencias != FALSE) {
                                        foreach ($competencias->result() as $row) {
                                            echo "<tr>";
                                                echo "<td>".$row->competencia."</td>";
                                                echo "<td>".$row->cuatrimestre."</td>";
                                                echo "<td>".$row->especialidad."</td>";
                                                echo "<td>";
                                                    echo "<a type='button' class='btn btn-default' aria-label='Left Align' href=".base_url()."index.php/competencias/editar_competencia/".$row->id_competencia.">";
                                                        echo "<span class='glyphicon glyphicon-edit' aria-hidden='true'></span>";
                                                    echo "</a>";
                                                    echo "<a type='button' class='btn btn-default' aria-label='Left Align' href=".base_url()."index.php/competencias/eliminar_competencia/".$row->id_competencia.">";
                                                        echo "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>";
                                                    echo "</a>";
                                                echo "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "No existen competencias";
                                    }
                                ?>

                            </tbody>
					
			</table>

			<hr> <!-- Botones -->
			<div align="right">
				<button type="button" class="btn btn-danger">Cancelar</button>
				<a type="button" class="btn btn-primary" href="<?=site_url()?>/competencias/agregar_competencia">Agregar competencia</a>
			</div>