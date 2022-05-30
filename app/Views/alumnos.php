 <div class="row">   
    <div class="col-sm-12">
      <table class="table table-striped table-bordered" id="alumnos" width="100%">
        <thead>
          <th>Matrícula</th>
          <th>Telebachillerato</th>
          <th>Estatus Alumno</th>
          <th>Nombre</th>
          <th>Genero</th>
          <th>Generación</th>
          <th>Municipio Residencia</th>
          <th>País Nacimiento</th>
          <th>Fecha Nacimiento</th>
          <th>Opciones</th>
        </thead>
        <tbody>
        <?php foreach ($alumnos as $dato): ?>
          <tr>
            <td><?=$dato->matricula;?></td>
            <td><?=$dato->desc_tlb;?></td>
            <td><?=$dato->desc_alumnos_activos;?></td>
            <td><?=$dato->nombre." ".$dato->primer_apellido." ".$dato->segundo_apellido;?></td>           
            <td><?=$dato->desc_genero;?></td>
            <td><?=$dato->generacion;?></td>
            <td><?=$dato->nombre_mpo;?></td>
            <td><?=$dato->nombre_pais;?></td>
            <td><?=$dato->fecha_nac;?></td>
            <td><button type="button" class="btn btn-primary detalles" data-info="<?=$dato->id_alumno_tbc;?>" data-tipo = "2">Detalles</button></td>        
          </tr>          
        <?php endforeach ?>
        </tbody>       
      </table>     
    </div>  
  </div>

  <script>
    principal.uveg.tabla_alumnos();    
  </script>