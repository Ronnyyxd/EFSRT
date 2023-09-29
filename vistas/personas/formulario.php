<?php
$id = isset($datos['id'])?$datos['id']:'';
$nombres = isset($datos['nombres'])?$datos['nombres']:'';
$apellidos = isset($datos['apellidos'])?$datos['apellidos']:'';
$dni = isset($datos['dni'])?$datos['dni']:'';
$correo = isset($datos['correo'])?$datos['correo']:'';
$direccion = isset($datos['direccion'])?$datos['direccion']:'';
$Telefono = isset($datos['Telefono'])?$datos['Telefono']:'';
$password = isset($datos['password'])?$datos['password']:'';
$usuario = isset($datos['usuario'])?$datos['usuario']:'';
$fechaNacimiento = isset($datos['fechaNacimiento'])?$datos['fechaNacimiento']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nueva Persona':'Editando Persona';
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
    <form action="?ctrl=CtrlPersonas&accion=guardar" method="post">
        id:
        <input type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        nombres:
        <input type="text" name="nombres" value="<?=$nombres?>">
        <br>
        apellidos:
        <input type="text" name="apellidos" value="<?=$apellidos?>">
        <br>
        dni:
        <input type="text" name="dni" value="<?=$dni?>">
        <br>
        correo:
        <input type="text" name="correo" value="<?=$correo?>">
        <br>
        direccion:
        <input type="text" name="direccion" value="<?=$direccion?>">
        <br>
        Telefono:
        <input type="text" name="Telefono" value="<?=$Telefono?>">
        <br>
        password:
        <input type="text" name="password" value="<?=$password?>">
        <br>
        usuario:
        <input type="text" name="usuario" value="<?=$usuario?>">
        <br>
        fechaNacimiento:
        <input type="text" name="fechaNacimiento" value="<?=$fechaNacimiento?>">
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlPersonas">Retornar</a>
</body>
</html>

