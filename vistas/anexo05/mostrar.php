<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <h1><?=$titulo?></h1>
<a href="?ctrl=CtrlAnexo05&accion=nuevo">Nuevo Anexo 05</a>
    <table class="table">
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
        <a href="?ctrl=CtrlAnexo05&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlAnexo05&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>