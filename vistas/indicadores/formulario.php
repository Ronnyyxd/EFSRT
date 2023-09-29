<?php
$id = isset($datos['id'])?$datos['id']:'';
$nombre = isset($datos['nombre'])?$datos['nombre']:'';
$descripcion = isset($datos['descripcion'])?$datos['descripcion']:'';
$idDetalleMatricula = isset($datos['idDetalleMatricula'])?$datos['idDetalleMatricula']:'';
$promedio = isset($datos['promedio'])?$datos['promedio']:'';
$notaRecuperacion = isset($datos['notaRecuperacion'])?$datos['notaRecuperacion']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nuevo Indicador':'Editando Indicador';
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
    <form action="?ctrl=CtrlIndicadores&accion=guardar" method="post">
        id:
        <input type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        nombre:
        <input type="text" name="nombre" value="<?=$nombre?>">
        <br>
        descripcion:
        <input type="text" name="descripcion" value="<?=$descripcion?>">
        <br>
        idDetalleMatricula:
        <input type="text" name="idDetalleMatricula" value="<?=$idDetalleMatricula?>">
        <br>
        promedio:
        <input type="text" name="promedio" value="<?=$promedio?>">
        <br>
        notaRecuperacion:
        <input type="text" name="notaRecuperacion" value="<?=$notaRecuperacion?>">
        <br>
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlIndicadores">Retornar</a>
</body>
</html>

