<?php
$idPrograma_estudios = isset($datos['idPrograma_estudios'])?$datos['idPrograma_estudios']:'';
$id = isset($datos['id'])?$datos['id']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nuevo Docente':'Editando Docente';
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
    <form action="?ctrl=CtrlDocentes&accion=guardar" method="post">
    idPrograma_estudios:
        <input type="text" name="idPrograma_estudios" value="<?=$idPrograma_estudios?>">
        <br>
        id:
        <input type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlDocentes">Retornar</a>
</body>
</html>