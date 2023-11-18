<?php
$id = isset($datos['id'])?$datos['id']:'';
$nombre = isset($datos['nombre'])?$datos['nombre']:'';
$logo = isset($datos['logo'])?$datos['logo']:'';
$idTurno = isset($datos['idTurno'])?$datos['idTurno']:'';
$esNuevo = isset($datos['id'])?0:1;
?>
    <form action="?ctrl=CtrlProgramas_estudios&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        nombre:
        <input class="form-control" type="text" name="nombre" value="<?=$nombre?>">
        <br>
        logo:
        <input class="form-control" type="text" name="logo" value="<?=$logo?>">
        <br>
        idTurno:
        <input class="form-control" type="text" name="idTurno" value="<?=$idTurno?>">
        <br>
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlProgramas_estudios">Retornar</a>


