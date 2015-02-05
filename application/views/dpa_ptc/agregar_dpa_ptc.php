			<h2>Dar de alta DPA/PTC</h2><hr>
			<form class="form-group" id="formAgregarDpaPtc" action="<?=base_url()?>index.php/dpa_ptc/guardar_dpa_ptc" method="POST">
				
				<br> <!-- Profesor -->
				<label for="profesor">Profesor</label>
				<input type="text" class="form-control" name="profesor" id="profesor" placeholder="Ingresa el nombre del profesor">
				
				<br> <!-- Carrera -->
				<label for="carrera">Carrera</label>
				<select class="form-control" name="carrera" id="carrera">
					<option value="Sistemas">Sistemas</option>
					<option value="Mecatrónica">Mecatrónica</option>
					<option value="Industrial">Industrial</option>
					<option value="Mecánica">Mecánica</option>
					<option value="Energía">Energía</option>
					<option value="Negocios">Negocios</option>
				</select>

				<br> <!-- Puesto -->
				<label for="puesto">Puesto</label>
				<select class="form-control" name="puesto" id="puesto">
					<option value="DPA">DPA</option>
					<option value="PTC">PTC</option>
				</select>

				<div class="row">
					<div class="col-md-6 form-group">
						<br> <!-- Fecha de inicio -->
						<label for="fecha_inicio" class=" control-label">Fecha de inicio</label>
						<input class="datepicker form-control" type="text" name="fecha_inicio" id="fecha_inicio">
					</div>
					
					<div class="col-md-6 form-group">
						<br> <!-- Fecha de salida -->
						<label for="fecha_salida">Fecha de salida</label>
						<input class="datepicker form-control" type="text" name="fecha_salida" id="fecha_salida">
					</div>
				</div>

				<hr> <!-- Botones -->
				<div align="right">
					<a type="button" class="btn btn-danger" href="<?=base_url()?>index.php/dpa_ptc">Cancelar</a>
					<button type="submit" class="btn btn-primary" name="AgregarDpaPtc" id="AgregarDpaPtc">Aceptar</button>
				</div>
			</form>