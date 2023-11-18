
<a href="#" class="btn btn-primary nuevo">
    <i class="fa fa-plus"></i> 
    Nuevo Anexo 03
</a>
    <table class="table">
    <thead>
        <tr>
            <th>Numero del Modulo</th>
            <th>Fecha_desde</th>
            <th>Fecha_hasta</th>
            <th>horario</th>
            <th>observaciones</th>
            <th>pago_por</th>
            <th>movilidad</th>
            <th>otros</th>
            <th>solo_EFSRT</th>
            <th>idEmpresa</th>
            <th>idEstudiante</th>
            <th>idModulo</th>
            <th>detalle_otros</th>
            </tr>
      </thead>
      <tbody>
<?php
if (is_array($datos))
foreach ($datos as $d) {
    ?>
<tr>
    <td>
        <?=$d['NroModulo']?>
    </td>
    <td>
        <?=$d['Fecha_desde']?>
    </td>
    <td>
        <?=$d['Fecha_hasta']?>
    </td>
    <td>
        <?=$d['horario']?>
    </td>
    <td>
        <?=$d['observaciones']?>
    </td>
    <td>
        <?=$d['pago_por']?>
    </td>
    <td>
        <?=$d['movilidad']?>
    </td>
    <td>
        <?=$d['otros']?>
    </td>
    <td>
        <?=$d['solo_EFSRT']?>
    </td>
    <td>
        <?=$d['idEmpresa']?>
    </td>
    <td>
        <?=$d['idEstudiante']?>
    </td>
    <td>
        <?=$d['modulo']?>
    </td>
    <td>
        <?=$d['detalle_otros']?>
    </td>
    <td>    
        <a data-id="<?=$d["Fecha_desde"]?>" href="#" class="btn btn-success editar">
            <i class="fa fa-edit"></i> 
            Editar
        </a>
        <a data-id="<?=$d["Fecha_hasta"]?>" data-nombre="<?=$d["nombre"]?>" href="#" class="btn btn-danger eliminar">
          <i class="fa fa-trash"></i>  
          Eliminar
        </a>
    </td>
</tr>

<?php
}
?>
      </tbody>
    </table>

    <a href="?">Retornar</a>

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Cargos</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Cargando Cargos...</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <script>
        $(()=>{
            
            $('#nuevo').click(function (e) { 
                e.preventDefault();
                // alert('nuevo')

                $('#modal-lg').modal('show')
            });
        });
      </script>