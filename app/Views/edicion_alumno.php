<button type="button" class="btn btn-success float-left detalles" data-info="<?=$alumno[0]->id_alumno_tbc;?>" data-tipo="2" id="3">Regresar<< </button><br><br>
<form id="sbm_alumnos" name="sbm_alumnos" method="POST">
	<div class="row">
        <div class="mb-3">
        	<input type="hidden" name="id_persona" id="id_persona" value="<?=(sizeof($alumno)>0)?$alumno[0]->id_persona:""; ?>">
        	<input type="hidden" name="id_alumno_tbc" id="id_alumno_tbc" value="<?=(sizeof($alumno)>0)?$alumno[0]->id_alumno_tbc:""; ?>">

        	<label for="id_tlb" class="form-label">Telebachillerato</label>
        	<select class="form-select" id="id_tlb" name="id_tlb" required="">
        		<option selected disabled="" value="">Seleccione</option>
        		<?php foreach ($telebachillerato as $dato):
        			$selected = "";
        			if(sizeof($alumno)>0 && $alumno[0]->cat_tlb_id == $dato->cat_tlb_id){$selected="selected";}?>
        			<option <?=$selected;?> value='<?=$dato->cat_tlb_id;?>'><?=$dato->desc_tlb;?></option>
        		<?php endforeach; ?>
        	</select>
        </div>
        <div class="mb-3">
        	<label for="estatus_alumno" class="form-label">Estatus Alumno</label>
        	<select class="form-select" id="estatus_alumno" name="estatus_alumno" required="">
        		<option selected disabled="" value="">Seleccione</option>
        		<?php foreach ($estatus_alumno as $dato):
        			$selected = "";
        			if(sizeof($alumno)>0 && $alumno[0]->id_alumnos_activos == $dato->id_alumnos_activos){$selected="selected";}?>
        			<option <?=$selected;?> value='<?=$dato->id_alumnos_activos;?>'><?=$dato->desc_alumnos_activos;?></option>
        		<?php endforeach; ?>
        	</select>
        </div>
        <div class="mb-3">
        	<label for="nombre" class="form-label">Nombre</label>
        	<input type="text" class="form-control" name="nombre" id="nombre" value="<?=(sizeof($alumno)>0)?$alumno[0]->nombre:""; ?>" required>
        </div>
        <div class="mb-3">
        	<label for="primer_apellido" class="form-label">Paterno</label>
        	<input type="text" class="form-control" name="primer_apellido" id="primer_apellido" value="<?=(sizeof($alumno)>0)?$alumno[0]->primer_apellido:""; ?>" required>
        </div>
        <div class="mb-3">
        	<label for="segundo_apellido" class="form-label">Materno</label>
        	<input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido" value="<?=(sizeof($alumno)>0)?$alumno[0]->segundo_apellido:""; ?>" required>
        </div>
        <div class="mb-3">
        	<label for="id_genero" class="form-label">Género</label>
        	<select class="form-select" id="id_genero" name="id_genero" required="">
        		<option selected disabled="" value="">Seleccione</option>
        		<?php foreach ($cat_genero as $dato):
        			$selected = "";
        			if(sizeof($alumno)>0 && $alumno[0]->id_genero == $dato->id_genero){$selected="selected";}?>
        			<option <?=$selected;?> value='<?=$dato->id_genero;?>'><?=$dato->desc_genero;?></option>
        		<?php endforeach; ?>
        	</select>
        </div>
        <div class="mb-3">
        	<label for="generacion" class="form-label">Generación</label>
        	<input type="number" class="form-control" name="generacion" id="generacion" value="<?=(sizeof($alumno)>0)?$alumno[0]->generacion:""; ?>" required>
        </div>
        <div class="mb-3">
        	<label for="id_mpo_residencia" class="form-label">Municipio de residencia</label>
        	<select class="form-select" id="id_mpo_residencia" name="id_mpo_residencia" required="">
        		<option selected disabled="" value="">Seleccione</option>
        		<?php foreach ($cat_municipios as $dato):
        			$selected = "";
        			if(sizeof($alumno)>0 && $alumno[0]->id_mpo == $dato->id_mpo){$selected="selected";}?>
        			<option <?=$selected;?> value='<?=$dato->id_mpo;?>'><?=$dato->nombre_mpo;?></option>
        		<?php endforeach; ?>
        	</select>
        </div>
        <div class="mb-3">
        	<label for="id_pais_nac" class="form-label">País de nacimiento</label>
        	<select class="form-select" id="id_pais_nac" name="id_pais_nac" required="">
        		<option selected disabled="" value="">Seleccione</option>
        		<?php foreach ($cat_pais as $dato):
        			$selected = "";
        			if(sizeof($alumno)>0 && $alumno[0]->id_pais == $dato->id_pais){$selected="selected";}?>
        			<option <?=$selected;?> value='<?=$dato->id_pais;?>'><?=$dato->nombre_pais;?></option>
        		<?php endforeach; ?>
        	</select>
        </div>
        <div class="mb-3">
		    <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
		    <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" value="<?=(sizeof($alumno)>0)?$alumno[0]->fecha_nac_orig:""; ?>" required>
	    </div>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar registro</button>	
</form>

<script>
	principal.uveg.sbm_alumnos();
</script>
