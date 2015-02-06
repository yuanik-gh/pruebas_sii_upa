			<h2>Editar DPA/PTC</h2><hr>
			<form class="form-group" id="formAgregarDpaPtc" action="<?=base_url()?>index.php/dpa_ptc/guardar_cambios_dpa_ptc" method="POST">
				
				<br> <!-- Profesor -->
				<label for="profesor">Profesor</label>
                                <input required type="text" class="form-control" name="profesor" id="profesor" placeholder="Ingresa el nombre del profesor">
				
				<br> <!-- Carrera -->
				<label for="carrera">Carrera</label>
                                <select required class="form-control" name="carrera" id="carrera">
                                    <option value="">Selecciona una opción</option>
                                    <option value="1">Sistemas</option>
                                    <option value="2">Mecatrónica</option>
                                    <option value="3">Industrial</option>
                                    <option value="4">Mecánica</option>
                                    <option value="5">Energía</option>
                                    <option value="6">Negocios</option>
				</select>

				<br> <!-- Puesto -->
				<label for="puesto">Puesto</label>
                                <select required class="form-control" name="puesto" id="puesto">
                                    <option value="">Selecciona una opción</option>
                                    <option value="DPA">DPA</option>
                                    <option value="PTC">PTC</option>
				</select>

				<div class="row">
					<div class="col-md-6 form-group">
						<br> <!-- Fecha de inicio -->
						<label for="fecha_inicio" class=" control-label">Fecha de inicio</label>
                                                <input required class="datepicker form-control" type="text" name="fecha_inicio" id="fecha_inicio">
					</div>
					
					<div class="col-md-6 form-group">
						<br> <!-- Fecha de salida -->
						<label for="fecha_salida">Fecha de salida</label>
                                                <input required class="datepicker form-control" type="text" name="fecha_salida" id="fecha_salida">
					</div>
				</div>

				<hr> <!-- Botones -->
				<div align="right">
					<a type="button" class="btn btn-danger" href="<?=base_url()?>index.php/dpa_ptc">Cancelar</a>
					<button type="submit" class="btn btn-primary">Aceptar</button>
				</div>
			</form>