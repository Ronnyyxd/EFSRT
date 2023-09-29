<?php
$id = isset($datos['id'])?$datos['id']:'';
$tabla = isset($datos['tabla'])?$datos['tabla']:'';
$operacion = isset($datos['operacion'])?$datos['operacion']:'';
$fecha = isset($datos['fecha'])?$datos['fecha']:'';
$usuario = isset($datos['usuario'])?$datos['usuario']:'';
$ip = isset($datos['ip'])?$datos['ip']:'';
$datos_new = isset($datos['datos_new'])?$datos['datos_new']:'';
$datos_old = isset($datos['datos_old'])?$datos['datos_old']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nueva Auditoria':'Editando Autoria';
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
    <form action="?ctrl=CtrlAuditoria&accion=guardar" method="post">
        id:
        <input type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        tabla:
        <input type="text" name="tabla" value="<?=$tabla?>">
        <br>
        operacion:
        <input type="text" name="operacion" value="<?=$operacion?>">
        <br>
        fecha:
        <input type="text" name="fecha" value="<?=$fecha?>">
        <br>
        usuario:
        <input type="text" name="usuario" value="<?=$usuario?>">
        <br>
        ip:
        <input type="text" name="ip" value="<?=$ip?>">
        <br>
        datos_new:
        <input type="text" name="datos_new" value="<?=$datos_new?>">
        <br>
        datos_old:
        <input type="text" name="datos_old" value="<?=$datos_old?>">
        <br>
        idEmpresa:
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlAuditoria">Retornar</a>
</body>
</html>

