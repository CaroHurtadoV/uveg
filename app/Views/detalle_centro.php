<div class="row">   
  <div class="col-sm-12">
    <button type="button" class="btn btn-success tab float-right" id="2">Regresar<< </button><br><br>
    <?php if (!empty($centro)) {?>
      <table class="table table-striped table-bordered" id="centros" width="100%">
        <tr>
          <td>id</td>
          <td><?=$centro[0]->cat_tlb_id;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Clave</td>
          <td><?=$centro[0]->clave;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Telebachillerato</td>
          <td><?=$centro[0]->desc_tlb;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Clave del Centro de Trabajo</td>
          <td><?=$centro[0]->clave_centro;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Municipio</td>
          <td><?=$centro[0]->nombre_mpo;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Encargado</td>
          <td><?=$centro[0]->encargado;?></td>
          <td></td>
        </tr>
        <tr>
          <td>Correo del encargado</td>
          <td><?=$centro[0]->correo;?></td>
          <td></td>
        </tr>            
      </table>
    <?php }else{?>
      <h3 class="nodatos">No hay datos</h3>
    <?php }?>
  </div>
</div>








