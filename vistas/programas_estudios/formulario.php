<?php
$id = isset($datos['id'])?$datos['id']:'';
$nombre = isset($datos['nombre'])?$datos['nombre']:'';
$logo = isset($datos['logo'])?$datos['logo']:'';
$idTurno = isset($datos['idTurno'])?$datos['idTurno']:'';
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
    <form action="?ctrl=CtrlProgramas_estudios&accion=guardar" method="post">
        id:
        <input type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        nombre:
        <input type="text" name="nombre" value="<?=$nombre?>">
        <br>
        logo:
        <input type="text" name="logo" value="<?=$logo?>">
        <br>
        idTurno:
        <input type="text" name="idTurno" value="<?=$idTurno?>">
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlProgramas_estudios">Retornar</a>
</body>
</html>

