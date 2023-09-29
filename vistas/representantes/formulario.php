<?php
$id = isset($datos['id'])?$datos['id']:'';
$cargo = isset($datos['cargo'])?$datos['cargo']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nuevo Representante':'Editando Representante';
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
    <form action="?ctrl=CtrlRepresentantes&accion=guardar" method="post">
        id:
        <input type="text" name="id" value="<?=$id?>">
        cargo:
            <input type="text" name="cargo" value="<?=$cargo?>">
            <br>
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlRepresentantes">Retornar</a>
</body>
</html>