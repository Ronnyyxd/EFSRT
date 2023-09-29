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
<a href="?ctrl=CtrlEmpresas&accion=nuevo">Nuevo </a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>RazonSocial</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>rubro</th>
            <th>idRepresentante</th>
            <th>RUC</th>
            <th>esActiva</th>
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
        <?=$d['RazonSocial']?>
    </td>
    <td>
        <?=$d['Direccion']?>
    </td>
    <td>
        <?=$d['Telefono']?>
    </td>
    <td>
        <?=$d['rubro']?>
    </td>
    <td>
        <?=$d['idRepresentante']?>
    </td>
    <td>
        <?=$d['RUC']?>
    </td>
    <td>
        <?=$d['esActiva']?>
    </td>

    <td>
        <a href="?ctrl=CtrlEmpresas&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlEmpresas&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>