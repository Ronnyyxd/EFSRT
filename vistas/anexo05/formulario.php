<?php
$id = isset($datos['id'])?$datos['id']:'';
$idPrograma_estudios = isset($datos['idPrograma_estudios'])?$datos['idPrograma_estudios']:'';
$idEstudiante = isset($datos['idEstudiante'])?$datos['idEstudiante']:'';
$idModulo = isset($datos['idModulo'])?$datos['idModulo']:'';
$fecha_inicio = isset($datos['fecha_inicio'])?$datos['fecha_inicio']:'';
$fecha_fin = isset($datos['fecha_fin'])?$datos['fecha_fin']:'';
$Total_horas = isset($datos['Total_horas'])?$datos['Total_horas']:'';
$idEmpresa = isset($datos['idEmpresa'])?$datos['idEmpresa']:'';
$lugar_oficina = isset($datos['lugar_oficina'])?$datos['lugar_oficina']:'';
$lugar_laboratorio = isset($datos['lugar_laboratorio'])?$datos['lugar_laboratorio']:'';
$lugar_almacen = isset($datos['lugar_almacen'])?$datos['lugar_almacen']:'';
$lugar_campo = isset($datos['lugar_campo'])?$datos['lugar_campo']:'';
$lugar_otros = isset($datos['lugar_otros'])?$datos['lugar_otros']:'';
$horario = isset($datos['horario'])?$datos['horario']:'';
$tareas = isset($datos['tareas'])?$datos['tareas']:'';
$total_puntaje = isset($datos['total_puntaje'])?$datos['total_puntaje']:'';
$fecha_anexo = isset($datos['fecha_anexo'])?$datos['fecha_anexo']:'';
$lugar_anexo = isset($datos['lugar_anexo'])?$datos['lugar_anexo']:'';

$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nuevo Anexo 05':'Editando Anexo 05';
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
    <form action="?ctrl=CtrlAnexo05&accion=guardar" method="post">
        id:
        <input type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        idPrograma_estudios:
        <input type="text" name="idPrograma_estudios" value="<?=$idPrograma_estudios?>">
        <br>
        idEstudiante:
        <input type="text" name="idEstudiante" value="<?=$idEstudiante?>">
        <br>
        idModulo:
        <input type="text" name="idModulo" value="<?=$idModulo?>">
        <br>
        fecha_inicio:
        <input type="date" name="fecha_inicio" value="<?=$fecha_inicio?>">
        <br>
        fecha_fin:
        <input type="date" name="fecha_fin" value="<?=$fecha_fin?>">
        <br>
        Total_horas:
        <input type="text" name="Total_horas" value="<?=$Total_horas?>">
        <br>
        idEmpresa:
        <input type="text" name="idEmpresa" value="<?=$idEmpresa?>">
        <br>
        lugar_oficina:
        <input type="text" name="lugar_oficina" value="<?=$lugar_oficina?>">
        <br>
        lugar_laboratorio:
        <input type="text" name="lugar_laboratorio" value="<?=$lugar_laboratorio?>">
        <br>
        lugar_almacen:
        <input type="text" name="lugar_almacen" value="<?=$lugar_almacen?>">
        <br>
        lugar_campo:
        <input type="text" name="lugar_campo" value="<?=$lugar_campo?>">
        <br>
        lugar_otros:
        <input type="text" name="lugar_otros" value="<?=$lugar_otros?>">
        <br>
        horario:
        <input type="text" name="horario" value="<?=$horario?>">
        <br>
        tareas:
        <input type="text" name="tareas" value="<?=$tareas?>">
        <br>
        total_puntaje:
        <input type="text" name="total_puntaje" value="<?=$total_puntaje?>">
        <br>
        fecha_anexo:
        <input type="text" name="fecha_anexo" value="<?=$fecha_anexo?>">
        <br>
        lugar_anexo:
        <input type="text" name="lugar_anexo" value="<?=$lugar_anexo?>">
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlAnexo05">Retornar</a>
</body>
</html>