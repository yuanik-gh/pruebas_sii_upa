			<h2>Editar competencia</h2><hr>

			<form class="form-group" id="formAgregarCompetencia" action="<?=site_url()?>/competencias/guardar_cambios_competencia" method="POST">
				
				<label for="fecha_inicio" class=" control-label">Competencias</label>
				<textarea class="form-control" rows="5" name="competencia" id="competencia"><?=$competencia?></textarea><br>
				

				<input type="hidden" name="id_competencia" value="<?=$id_competencia?>">

				<div class="row">
					<div class="col-md-3">
						<label>Cuatrimestre</label>
						<select class="form-control" name="cuatrimestre" id="cuatrimestre">
							<option value="<?=$cuatrimestre?>"><?=$cuatrimestre?></option>
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
							<option value="<?=$especialidad?>"><?=$especialidad?></option>
							<option value="redes">Redes</option>
							<option value="software">Software</option>
						</select>
					</div>

				</div>

				<hr>
				<div align="right">
					<a type="button" class="btn btn-danger" href="<?=site_url()?>/competencias">Cancelar</a>
					<button type="submit" class="btn btn-primary" id="agregarCompetencia">Editar competencia</button>
				</div>

			</form>