 
    <div class="row">
      <div class="col-12">
          <form id="sbm_calificaciones">
            <div class="mb-3 row">
              <label for="alumno" class="col-sm-2 col-form-label">Alumno</label>
              <div class="col-sm-10">
                <select class="form-select" id="alumno" name="alumno" required="">
                  <option selected value="" disabled="">Selecciona</option>
                  <?php foreach ($alumnos as $dato) :?> 
                    <option value="<?=$dato->id_alumno_tbc;?>"><?=$dato->matricula." ".$dato->nombre." ".$dato->primer_apellido." ".$dato->segundo_apellido?></option>
                  <?php endforeach; ?>
                </select>    
              </div>
            </div>
            <div class="mb-3 row">
              <label for="materia" class="col-sm-2 col-form-label">Materia</label>
              <div class="col-sm-10">
                <select class="form-select" id="materia" name="materia" required="">
                  <option selected value="" disabled="">Selecciona</option>
                  <?php foreach ($materias as $dato) :?> 
                    <option value="<?=$dato->id_materia;?>"><?=$dato->clave_materia." ".$dato->nombre_materia;?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <table class="table table-success table-striped table-bordered">
              <thead>
                <th>Primera calificación</th>
                <th>Segunda calificación</th>
                <th>Tercera calificación</th>
                <th>Promedio</th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <input class="form-control calificacion" type="number" step="any" name="calificacion1" id="calificacion1" required="">
                  </td>
                  <td>
                    <input class="form-control calificacion" type="number" step="any" name="calificacion2" id="calificacion2" required="">
                  </td>
                  <td>
                    <input class="form-control calificacion" type="number" step="any" name="calificacion3" id="calificacion3" required="">
                  </td>
                  <td>
                    <input class="form-control" type="number" step="any" name="promedio" id="promedio" required="">
                  </td>
                </tr>
              </tbody>    
            </table>
            <button type="submit" class="btn btn-primary" style="float: right;">Guardar calificación</button>
          </form>
        </div>
              
    </div>

    <script>
      principal.uveg.calcula_promedio();
      principal.uveg.sbm_calificaciones();
    </script>



    
  


  

