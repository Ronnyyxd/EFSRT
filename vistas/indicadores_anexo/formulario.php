<?php
$id = isset($datos['id'])?$datos['id']:'';
$idAnexo = isset($datos['idAnexo'])?$datos['idAnexo']:'';
$idIndicador = isset($datos['idIndicador'])?$datos['idIndicador']:'';
$calificacion = isset($datos['calificacion'])?$datos['calificacion']:'';
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
    <form action="?ctrl=CtrlIndicadores_anexo&accion=guardar" method="post">
        id:
        <input type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        idAnexo:
        <input type="text" name="idAnexo" value="<?=$idAnexo?>">
        <br>
        idIndicador:
        <input type="text" name="idIndicador" value="<?=$idIndicador?>">
        <br>
        calificacion:
        <input type="text" name="calificacion" value="<?=$calificacion?>">
        <br>
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlIndicadores_anexo">Retornar</a>
</body>
</html>

