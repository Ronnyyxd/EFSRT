<?php
$id = isset($datos['id'])?$datos['id']:'';
$RazonSocial = isset($datos['RazonSocial'])?$datos['RazonSocial']:'';
$Direccion = isset($datos['Direccion'])?$datos['Direccion']:'';
$Telefono = isset($datos['Telefono'])?$datos['Telefono']:'';
$rubro = isset($datos['rubro'])?$datos['rubro']:'';
$idRepresentante = isset($datos['idRepresentante'])?$datos['idRepresentante']:'';
$RUC = isset($datos['RUC'])?$datos['RUC']:'';
$esActiva = isset($datos['esActiva'])?$datos['esActiva']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nuevo ':'Editando ';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=$titulo?></h1>
    <form action="?ctrl=CtrlEmpresas&accion=guardar" method="post">
        id:
        <input type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        RazonSocial:
        <input type="text" name="RazonSocial" value="<?=$RazonSocial?>">
        <br>
        Direccion:
        <input type="text" name="Direccion" value="<?=$Direccion?>">
        <br>
        Telefono:
        <input type="text" name="Telefono" value="<?=$Telefono?>">
        <br>
        rubro:
        <input type="text" name="rubro" value="<?=$rubro?>">
        <br>
        idRepresentante:
        <input type="text" name="idRepresentante" value="<?=$idRepresentante?>">
        <br>
        RUC:
        <input type="text" name="RUC" value="<?=$RUC?>">
        <br>
        esActiva:
        <input type="text" name="esActiva" value="<?=$esActiva?>">
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlEmpresas">Retornar</a>
</body>
</html>

