<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
   
<a href="?ctrl=CtrlAnexo03&accion=nuevo">Nuevo Anexo 03</a>
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
        <a href="?ctrl=CtrlAnexo03&accion=editar&NroModulo=<?=$d['NroModulo']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlAnexo03&accion=eliminar&NroModulo=<?=$d['NroModulo']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>