
<a href="?ctrl=CtrlTurnos&accion=nuevo">Nuevo Turno</a>

<button id="nuevo" type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                  Nuevo
</button>


    <table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Turno</th>
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
        <?=$d['turno']?>
    </td>
    <td>
        <a href="?ctrl=CtrlTurnos&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlTurnos&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
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
              <h4 class="modal-title">Turnos</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Cargando turnos...</p>
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