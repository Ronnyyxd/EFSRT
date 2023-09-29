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
<a href="?ctrl=CtrlAuditoria&accion=nuevo">Nueva Auditoria</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>tabla</th>
            <th>operacion</th>
            <th>fecha</th>
            <th>usuario</th>
            <th>ip</th>
            <th>datos_new</th>
            <th>datos_old</th>
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
        <?=$d['tabla']?>
    </td>
    <td>
        <?=$d['operacion']?>
    </td>
    <td>
        <?=$d['fecha']?>
    </td>
    <td>
        <?=$d['usuario']?>
    </td>
    <td>
        <?=$d['ip']?>
    </td>
    <td>
        <?=$d['datos_new']?>
    </td>
    <td>
        <?=$d['datos_old']?>
    </td>

    <td>
        <a href="?ctrl=CtrlAuditoria&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlAuditoria&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>