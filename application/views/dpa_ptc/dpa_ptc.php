<h2>DPA/PTC CARRERAS</h2><hr>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> <!-- Inicio de acordeon -->

    <div class="panel panel-default"> <!-- Sistemas -->
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSist" aria-expanded="true" aria-controls="collapseOne">
                    Sistemas Estratégicos de Información
                </a>
            </h4>
        </div>
        <div id="collapseSist" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <table class="table table-striped">
                    <?php
                    if ($prof_sistemas != FALSE) {
                        foreach ($prof_sistemas->result() as $row) {
                            echo "<tr>";
                            echo "<td>" . $row->profesor . "</td>";
                            echo "<td>" . $row->puesto . "</td>";
                            echo "<td>";
                            echo "<a type='button' class='btn btn-default' aria-label='Left Align' href=" . site_url() . "/dpa_ptc/editar_dpa_ptc/" . $row->id_dpa_ptc . ">";
                            echo "<span class='glyphicon glyphicon-edit' aria-hidden='true'></span>";
                            echo "</a>";
                            echo "<a type='button' class='btn btn-default' aria-label='Left Align' href=" . site_url() . "/dpa_ptc/eliminar_dpa_ptc/" . $row->id_dpa_ptc . ">";
                            echo "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>";
                            echo "</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "No existen DPA/PTC";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <div class="panel panel-default"> <!-- Mecatrónica -->
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseMecat" aria-expanded="false" aria-controls="collapseTwo">
                    Mecatrónica
                </a>
            </h4>
        </div>
        <div id="collapseMecat" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <table class="table table-striped">
                    <?php
                    if ($prof_mecatronica != FALSE) {
                        foreach ($prof_mecatronica->result() as $row) {
                            echo "<tr>";
                            echo "<td>" . $row->profesor . "</td>";
                            echo "<td>" . $row->puesto . "</td>";
                            echo "<td>";
                            echo "<a type='button' class='btn btn-default' aria-label='Left Align' href=" . site_url() . "/dpa_ptc/editar_dpa_ptc/" . $row->id_dpa_ptc . ">";
                            echo "<span class='glyphicon glyphicon-edit' aria-hidden='true'></span>";
                            echo "</a>";
                            echo "<a type='button' class='btn btn-default' aria-label='Left Align' href=" . site_url() . "/dpa_ptc/eliminar_dpa_ptc/" . $row->id_dpa_ptc . ">";
                            echo "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>";
                            echo "</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "No existen DPA/PTC";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <div class="panel panel-default"> <!-- Industrial -->
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseInd" aria-expanded="false" aria-controls="collapseTwo">
                    Industrial
                </a>
            </h4>
        </div>
        <div id="collapseInd" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <table class="table table-striped">
                    <?php
                    if ($prof_industrial != FALSE) {
                        foreach ($prof_industrial->result() as $row) {
                            echo "<tr>";
                            echo "<td>" . $row->profesor . "</td>";
                            echo "<td>" . $row->puesto . "</td>";
                            echo "<td>";
                            echo "<a type='button' class='btn btn-default' aria-label='Left Align' href=" . site_url() . "/dpa_ptc/editar_dpa_ptc/" . $row->id_dpa_ptc . ">";
                            echo "<span class='glyphicon glyphicon-edit' aria-hidden='true'></span>";
                            echo "</a>";
                            echo "<a type='button' class='btn btn-default' aria-label='Left Align' href=" . site_url() . "/dpa_ptc/eliminar_dpa_ptc/" . $row->id_dpa_ptc . ">";
                            echo "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>";
                            echo "</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "No existen DPA/PTC";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <div class="panel panel-default"> <!-- Mecánica -->
        <div class="panel-heading" role="tab" id="headingFor">
            <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseMec" aria-expanded="false" aria-controls="collapseTwo">
                    Mecánica
                </a>
            </h4>
        </div>
        <div id="collapseMec" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <table class="table table-striped">
                    <?php
                    if ($prof_mecanica != FALSE) {
                        foreach ($prof_mecanica->result() as $row) {
                            echo "<tr>";
                            echo "<td>" . $row->profesor . "</td>";
                            echo "<td>" . $row->puesto . "</td>";
                            echo "<td>";
                            echo "<a type='button' class='btn btn-default' aria-label='Left Align' href=" . site_url() . "/dpa_ptc/editar_dpa_ptc/" . $row->id_dpa_ptc . ">";
                            echo "<span class='glyphicon glyphicon-edit' aria-hidden='true'></span>";
                            echo "</a>";
                            echo "<a type='button' class='btn btn-default' aria-label='Left Align' href=" . site_url() . "/dpa_ptc/eliminar_dpa_ptc/" . $row->id_dpa_ptc . ">";
                            echo "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>";
                            echo "</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "No existen DPA/PTC";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <div class="panel panel-default"> <!-- Energías -->
        <div class="panel-heading" role="tab" id="headingFive">
            <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEner" aria-expanded="false" aria-controls="collapseTwo">
                    Energías
                </a>
            </h4>
        </div>
        <div id="collapseEner" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <table class="table table-striped">
                    <?php
                    if ($prof_energias != FALSE) {
                        foreach ($prof_energias->result() as $row) {
                            echo "<tr>";
                            echo "<td>" . $row->profesor . "</td>";
                            echo "<td>" . $row->puesto . "</td>";
                            echo "<td>";
                            echo "<a type='button' class='btn btn-default' aria-label='Left Align' href=" . site_url() . "/dpa_ptc/editar_dpa_ptc/" . $row->id_dpa_ptc . ">";
                            echo "<span class='glyphicon glyphicon-edit' aria-hidden='true'></span>";
                            echo "</a>";
                            echo "<a type='button' class='btn btn-default' aria-label='Left Align' href=" . site_url() . "/dpa_ptc/eliminar_dpa_ptc/" . $row->id_dpa_ptc . ">";
                            echo "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>";
                            echo "</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "No existen DPA/PTC";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <div class="panel panel-default"> <!-- Negocios -->
        <div class="panel-heading" role="tab" id="headingFive">
            <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNego" aria-expanded="false" aria-controls="collapseTwo">
                    Negocios
                </a>
            </h4>
        </div>
        <div id="collapseNego" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <table class="table table-striped">
                    <?php
                    if ($prof_negocios != FALSE) {
                        foreach ($prof_negocios->result() as $row) {
                            echo "<tr>";
                            echo "<td>" . $row->profesor . "</td>";
                            echo "<td>" . $row->puesto . "</td>";
                            echo "<td>";
                            echo "<a type='button' class='btn btn-default' aria-label='Left Align' href=" . site_url() . "/dpa_ptc/editar_dpa_ptc/" . $row->id_dpa_ptc . ">";
                            echo "<span class='glyphicon glyphicon-edit' aria-hidden='true'></span>";
                            echo "</a>";
                            echo "<a type='button' class='btn btn-default' aria-label='Left Align' href=" . site_url() . "/dpa_ptc/eliminar_dpa_ptc/" . $row->id_dpa_ptc . ">";
                            echo "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>";
                            echo "</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "No existen DPA/PTC";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

</div> <!-- Fin de acordeon -->

<hr> <!-- Botones -->
<div align="right">
    <button type="button" class="btn btn-danger">Cancelar</button>
    <a type="button" class="btn btn-primary" href="<?= site_url() ?>/dpa_ptc/agregar_dpa_ptc">Agregar DPA/PTC</a>
</div>