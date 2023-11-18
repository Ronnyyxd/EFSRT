

<a href="#" class="btn btn-primary nuevo">
    <i class="fa fa-plus"></i> 
    Nuevo Anexo 05
</a>    <table class="table">
<thead>
        <tr>
            <th>Id</th>
            <th>idPrograma_estudios</th>
            <th>idEstudiante</th>
            <th>idModulo</th>
            <th>fecha_inicio</th>
            <th>fecha_fin</th>
            <th>Total_horas</th>
            <th>idEmpresa</th>
            <th>lugar_oficina</th>
            <th>lugar_laboratorio</th>
            <th>lugar_almacen</th>
            <th>lugar_campo</th>
            <th>lugar_otros</th>
            <th>lugar_taller</th>
            <th>tareas</th>
            <th>total_puntaje</th>
            <th>fecha_anexo</th>
            <th>lugar_anexo</th>
            </tr>
      </thead>
      <tbody>
<?php

if (is_array($datos))
foreach ($datos as $d) {
    ?>
<tr>
    <td>
        <?=$d['id']?>
    </td>
    <td>
        <?=$d['idPrograma_estudios']?>
    </td>
    <td>
        <?=$d['idEstudiante']?>
    </td>
    <td>
        <?=$d['idModulo']?>
    </td>
    <td>
        <?=$d['fecha_inicio']?>
    </td>
    <td>
        <?=$d['fecha_fin']?>
    </td>
    <td>
        <?=$d['Total_horas']?>
    </td>
    <td>
        <?=$d['idEmpresa']?>
    </td>
    <td>
        <?=$d['lugar_oficina']?>
    </td>
    <td>
        <?=$d['lugar_laboratorio']?>
    </td>
    <td>
        <?=$d['lugar_almacen']?>
    </td>
    <td>
        <?=$d['lugar_campo']?>
    </td>
    <td>
        <?=$d['lugar_otros']?>
    </td>
    <td>
        <?=$d['lugar_taller']?>
    </td>
    <td>
        <?=$d['tareas']?>
    </td>
    <td>
        <?=$d['total_puntaje']?>
    </td>
    <td>
        <?=$d['fecha_anexo']?>
    </td>
    <td>
        <?=$d['lugar_anexo']?>
    </td>
    <td>
        <a data-id="<?=$d["id"]?>" href="#" class="btn btn-success editar">
            <i class="fa fa-edit"></i> 
            Editar
        </a>
        <a data-id="<?=$d["id"]?>" data-nombre="<?=$d["idPrograma_estudios"]?>" href="#" class="btn btn-danger eliminar">
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
