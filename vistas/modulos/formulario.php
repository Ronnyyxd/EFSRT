<?php
$id = isset($datos['id'])?$datos['id']:'';
$nombre = isset($datos['nombre'])?$datos['nombre']:'';
$horas = isset($datos['horas'])?$datos['horas']:'';
$creditos = isset($datos['creditos'])?$datos['creditos']:'';
$numero = isset($datos['numero'])?$datos['numero']:'';
$idPlan = isset($datos['idPlan'])?$datos['idPlan']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nuevo Modulo':'Editando Modulo';
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
    <form action="?ctrl=CtrlModulos&accion=guardar" method="post">
        id:
        <input type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        nombre:
        <input type="text" name="nombre" value="<?=$nombre?>">
        <br>
        horas:
        <input type="text" name="horas" value="<?=$horas?>">
        <br>
        creditos:
        <input type="text" name="creditos" value="<?=$creditos?>">
        <br>
        numero:
        <input type="text" name="numero" value="<?=$numero?>">
        <br>
        idPlan:
        <input type="text" name="idPlan" value="<?=$idPlan?>">
        <br>
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlModulos">Retornar</a>
</body>
</html>

