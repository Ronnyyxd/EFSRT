<?php
$id = isset($datos['id'])?$datos['id']:'';
$numero = isset($datos['numero'])?$datos['numero']:'';
$fecha = isset($datos['fecha'])?$datos['fecha']:'';
$tareas = isset($datos['tareas'])?$datos['tareas']:'';
$porcentaje_avance = isset($datos['porcentaje_avance'])?$datos['porcentaje_avance']:'';
$idAnexo = isset($datos['idAnexo'])?$datos['idAnexo']:'';
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
    <form action="?ctrl=CtrlVisitas_anexo04&accion=guardar" method="post">
        id:
        <input type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        numero:
        <input type="text" name="numero" value="<?=$numero?>">
        <br>
        fecha:
        <input type="text" name="fecha" value="<?=$fecha?>">
        <br>
        tareas:
        <input type="text" name="tareas" value="<?=$tareas?>">
        <br>
        porcentaje_avance:
        <input type="text" name="porcentaje_avance" value="<?=$porcentaje_avance?>">
        <br>
        idAnexo:
        <input type="text" name="idAnexo" value="<?=$idAnexo?>">
        <br>
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlVisitas_anexo04">Retornar</a>
</body>
</html>

