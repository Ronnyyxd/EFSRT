<?php
$NroModulo = isset($datos['NroModulo'])?$datos['NroModulo']:'';
$Fecha_desde = isset($datos['Fecha_desde'])?$datos['Fecha_desde']:'';
$Fecha_hasta = isset($datos['Fecha_hasta'])?$datos['Fecha_hasta']:'';
$horario = isset($datos['horario'])?$datos['horario']:'';
$observaciones = isset($datos['observaciones'])?$datos['observaciones']:'';
$pago_por = isset($datos['pago_por'])?$datos['pago_por']:'';
$movilidad = isset($datos['movilidad'])?$datos['movilidad']:'';
$otros = isset($datos['otros'])?$datos['otros']:'';
$solo_EFSRT = isset($datos['solo_EFSRT'])?$datos['solo_EFSRT']:'';
$idEmpresa = isset($datos['idEmpresa'])?$datos['idEmpresa']:'';
$idEstudiante = isset($datos['idEstudiante'])?$datos['idEstudiante']:'';
$idModulo = isset($datos['idModulo'])?$datos['idModulo']:'';
$detalle_otros = isset($datos['detalle_otros'])?$datos['detalle_otros']:'';
$esNuevo = isset($datos['NroModulo'])?0:1;
$titulo = $esNuevo==1?'Nuevo Anexo 03':'Editando Anexo 03';
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
    <form action="?ctrl=CtrlAnexo03&accion=guardar" method="post">
        NroModulo:
        <input type="text" name="NroModulo" value="<?=$NroModulo?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        Fecha_desde:
        <input type="text" name="Fecha_desde" value="<?=$Fecha_desde?>">
        <br>
        Fecha_hasta:
        <input type="text" name="Fecha_hasta" value="<?=$Fecha_hasta?>">
        <br>
        horario:
        <input type="text" name="horario" value="<?=$horario?>">
        <br>
        observaciones:
        <input type="text" name="observaciones" value="<?=$observaciones?>">
        <br>
        pago_por:
        <input type="text" name="pago_por" value="<?=$pago_por?>">
        <br>
        movilidad:
        <input type="text" name="movilidad" value="<?=$movilidad?>">
        <br>
        otros:
        <input type="text" name="otros" value="<?=$otros?>">
        <br>
        solo_EFSRT:
        <input type="text" name="solo_EFSRT" value="<?=$solo_EFSRT?>">
        <br>
        idEmpresa:
        <input type="text" name="idEmpresa" value="<?=$idEmpresa?>">
        <br>
        idEstudiante:
        <input type="text" name="idEstudiante" value="<?=$idEstudiante?>">
        <br>
        
        idModulo:
        <input type="text" name="idModulo" value="<?=$idModulo?>">
        <br>
        detalle_otros:
        <input type="text" name="detalle_otros" value="<?=$detalle_otros?>">
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlAnexo03">Retornar</a>
</body>
</html>

