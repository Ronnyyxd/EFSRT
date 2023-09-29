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
<a href="?ctrl=CtrlAnexo04&accion=nuevo">Nuevo Anexo 04</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>fecha_inicio</th>
            <th>fecha_fin</th>
            <th>problemas_detectados</th>
            <th>observaciones</th>
            <th>idEstudiante</th>
            <th>idPrograma_estudios</th>
            <th>idModulo</th>
            <th>idEmpresa</th>
            <th>idDocente</th>
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
        <?=$d['fecha_inicio']?>
    </td>
    <td>
        <?=$d['fecha_fin']?>
    </td>
    <td>
        <?=$d['problemas_detectados']?>
    </td>
    <td>
        <?=$d['observaciones']?>
    </td>
    <td>
        <?=$d['idEstudiante']?>
    </td>
    <td>
        <?=$d['idPrograma_estudios']?>
    </td>
    <td>
        <?=$d['idModulo']?>
    </td>
    <td>
        <?=$d['idEmpresa']?>
    </td>
    <td>
        <?=$d['idDocente']?>
    </td>

    <td>
        <a href="?ctrl=CtrlAnexo04&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlAnexo04&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>