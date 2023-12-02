<?php
$id = isset($datos['id'])?$datos['id']:'';
$anio = isset($datos['anio'])?$datos['anio']:'';
$activo = isset($datos['activo'])?$datos['activo']:'';
$idPrograma = isset($datos['idPrograma'])?$datos['idPrograma']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nuevo Plan de Estudio':'Editando Plan de Estudio';
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
    <form action="?ctrl=CtrlPlanes_estudio&accion=guardar" method="post">
        id:
        <input type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        anio:
        <input type="text" name="anio" value="<?=$anio?>">
        <br>
        activo:
        <input type="text" name="activo" value="<?=$activo?>">
        <br>
        idPrograma:
        <input type="text" name="idPrograma" value="<?=$idPrograma?>">
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlPlanes_estudio">Retornar</a>
</body>
</html>

