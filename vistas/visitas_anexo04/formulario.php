<?php
$id = isset($datos['id'])?$datos['id']:'';
$numero = isset($datos['numero'])?$datos['numero']:'';
$fecha = isset($datos['fecha'])?$datos['fecha']:'';
$tareas = isset($datos['tareas'])?$datos['tareas']:'';
$porcentaje_avance = isset($datos['porcentaje_avance'])?$datos['porcentaje_avance']:'';
$idAnexo = isset($datos['idAnexo'])?$datos['idAnexo']:$_SESSION['idAnexo'];
$esNuevo = isset($datos['id'])?0:1;
?>

    <form action="?ctrl=CtrlVisitas_anexo04&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        Numero de visita:
        <input class="form-control" type="text" name="numero" value="<?=$numero?>">
        <br>        
        Fecha de visita:
        <input type="date" name="fecha" value="<?=$fecha?>">
        <br>
        <br>
        Tareas:
        <input class="form-control" type="text" name="tareas" value="<?=$tareas?>">
        <br>
        Porcentaje de avance:
        <input class="form-control" type="text" name="porcentaje_avance" value="<?=$porcentaje_avance?>">
        
        
        <input type="hidden" class="form-control" type="text" name="idAnexo" value="<?=$idAnexo?>">
        <br>
        <br>
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlVisitas_anexo04">Retornar</a>

