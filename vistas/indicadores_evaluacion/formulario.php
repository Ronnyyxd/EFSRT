<?php
$id = isset($datos['id'])?$datos['id']:'';
$item = isset($datos['item'])?$datos['item']:'';
$nombre = isset($datos['nombre'])?$datos['nombre']:'';
$idTipo_indicador = isset($datos['idTipo_indicador'])?$datos['idTipo_indicador']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nuevo Tipo Indicador':'Editando Tipo Indicador';
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
    <form action="?ctrl=CtrlIndicadores_evaluacion&accion=guardar" method="post">
        id:
        <input type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        item:
        <input type="text" name="item" value="<?=$item?>">
        <br>
        nombre:
        <input type="text" name="nombre" value="<?=$nombre?>">
        <br>
        idTipo_indicador:
        <input type="text" name="idTipo_indicador" value="<?=$idTipo_indicador?>">
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlIndicadores_evaluacion">Retornar</a>
</body>
</html>

