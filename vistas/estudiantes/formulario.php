<?php
$id = isset($datos['id'])?$datos['id']:'';
$idPrograma_estudios = isset($datos['idPrograma_estudios'])?$datos['idPrograma_estudios']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nuevo Estudiante':'Editando Estudiante';
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
    <form action="?ctrl=CtrlEstudiantes&accion=guardar" method="post">
        id:
        <input type="text" name="id" value="<?=$id?>">
        idPrograma_estudios:
            <input type="text" name="idPrograma_estudios" value="<?=$idPrograma_estudios?>">
            <br>
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlEstudiantes">Retornar</a>
</body>
</html>