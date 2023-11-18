<?php
$id = isset($datos['id'])?$datos['id']:'';
$anio = isset($datos['anio'])?$datos['anio']:'';
$activo = isset($datos['activo'])?$datos['activo']:'';
$idPrograma = isset($datos['idPrograma'])?$datos['idPrograma']:'';
$esNuevo = isset($datos['id'])?0:1;
?>
    <form action="?ctrl=CtrlPlanes_estudio&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        anio:
        <input class="form-control" type="text" name="anio" value="<?=$anio?>">
        <br>
        activo:
        <input class="form-control" type="text" name="activo" value="<?=$activo?>">
        <br>
        idPrograma:
        <input class="form-control" type="text" name="idPrograma" value="<?=$idPrograma?>">
        <br>
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlPlanes_estudio">Retornar</a>


