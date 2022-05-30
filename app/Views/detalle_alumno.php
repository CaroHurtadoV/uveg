<div class="row">   
  <div class="col-sm-12">
    <button type="button" class="btn btn-success tab float-left" id="3">Regresar<< </button>
    <button type="button" class="btn btn-warning float-right detalles" data-info="<?=$alumno[0]->id_alumno_tbc;?>" data-tipo="3">Editar alumno</button><br><br>
    <?php if (!empty($alumno)) {?>
      <table class="table table-striped table-bordered" id="alumnos" width="100%">
        <tr>
          <td>Matrícula</td>
          <td><?=$alumno[0]->matricula;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Telebachillerato</td>
          <td><?=$alumno[0]->desc_tlb;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Estatus Alumno</td>
          <td><?=$alumno[0]->desc_alumnos_activos;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Nombre</td>
          <td><?=$alumno[0]->nombre;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Paterno</td>
          <td><?=$alumno[0]->primer_apellido;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Materno</td>
          <td><?=$alumno[0]->segundo_apellido;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Genero</td>
          <td><?=$alumno[0]->desc_genero;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Generación</td>
          <td><?=$alumno[0]->generacion;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Municipio Residencia</td>
          <td><?=$alumno[0]->nombre_mpo;?></td>
          <td></td>
        </tr>
        <tr>
          <td>País Nacimiento</td>
          <td><?=$alumno[0]->nombre_pais;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Fecha Nacimiento</td>
          <td><?=$alumno[0]->fecha_nac;?></td>
          <td></td>
        </tr>           
      </table>
    <?php }else{?>
      <h3 class="nodatos">No hay datos</h3>
    <?php }?>
  </div>
</div>








