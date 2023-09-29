<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<button class="btn btn-warning" type="button"><a href="?ctrl=CtrlAnexo03&accion=nuevo">Nuevo Anexo 03</a></button>

    <table class="table">
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
    <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-dark" type="button"><a href="?ctrl=CtrlAnexo03&accion=editar&NroModulo=<?=$d['NroModulo']?>">
        <i class="bi bi-pencil"></i>
        </a></button>
        <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-dark" type="button"><a href="?ctrl=CtrlAnexo03&accion=eliminar&NroModulo=<?=$d['NroModulo']?>"><i class="bi bi-trash2-fill"></i></a></button>
        
    </td>
</tr>

<?php
}
?>

    </table>
    
    
    <div class="d-grid gap-2 d-md-block">
    <button class="btn btn-dark" type="button"><a href="?">Retornar</a></button>
</body>
</html>