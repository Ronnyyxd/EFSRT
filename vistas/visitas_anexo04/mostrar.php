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
<a href="?ctrl=CtrlVisitas_anexo04&accion=nuevo">Nuevo </a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>numero</th>
            <th>fecha</th>
            <th>tareas</th>
            <th>porcentaje_avance</th>
            <th>idAnexo</th>
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
        <?=$d['numero']?>
    </td>
    <td>
        <?=$d['fecha']?>
    </td>
    <td>
        <?=$d['tareas']?>
    </td>
    <td>
        <?=$d['porcentaje_avance']?>
    </td>
    <td>
        <?=$d['idAnexo']?>
    </td>

    <td>
        <a href="?ctrl=CtrlVisitas_anexo04&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlVisitas_anexo04&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>