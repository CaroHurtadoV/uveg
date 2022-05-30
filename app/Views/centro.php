 <div class="row">   
    <div class="col-sm-12">
      <table class="table table-striped table-bordered" id="centros" width="100%">
        <thead>
          <th>id</th>
          <th>Clave</th>
          <th>Telebachillerato</th>
          <th>Clave de centro</th>
          <th>Municipio</th>
          <th>Encargado</th>
          <th>Correo del encargado</th>
          <th>Opciones</th>
        </thead>
        <tbody>
        <?php foreach ($centros as $dato): ?>
          <tr>
            <td><?=$dato->cat_tlb_id;?></td>
            <td><?=$dato->clave;?></td>
            <td><?=$dato->desc_tlb;?></td>
            <td><?=$dato->clave_centro;?></td>
            <td><?=$dato->nombre_mpo;?></td>
            <td><?=$dato->encargado;?></td>
            <td><?=$dato->correo;?></td>
            <td><button type="button" class="btn btn-primary detalles" data-info="<?=$dato->cat_tlb_id;?>" data-tipo = "1">Detalles</button></td>        
          </tr>          
        <?php endforeach ?>
        </tbody>       
      </table>     
    </div>  
  </div>

  <script>
    principal.uveg.tabla_centros();    
  </script>