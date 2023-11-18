<?php
$id = isset($datos['id'])?$datos['id']:'';
$nombre = isset($datos['nombre'])?$datos['nombre']:'';
$horas = isset($datos['horas'])?$datos['horas']:'';
$creditos = isset($datos['creditos'])?$datos['creditos']:'';
$numero = isset($datos['numero'])?$datos['numero']:'';
$idPlan = isset($datos['idPlan'])?$datos['idPlan']:'';
$esNuevo = isset($datos['id'])?0:1;
?>
    <form action="?ctrl=CtrlModulos&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        nombre:
        <input class="form-control" type="text" name="nombre" value="<?=$nombre?>">
        <br>
        horas:
        <input class="form-control" type="text" name="horas" value="<?=$horas?>">
        <br>
        creditos:
        <input class="form-control" type="text" name="creditos" value="<?=$creditos?>">
        <br>
        numero:
        <input class="form-control" type="text" name="numero" value="<?=$numero?>">
        <br>
        idPlan:
        <input class="form-control" type="text" name="idPlan" value="<?=$idPlan?>">
        <br>
        <br>
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlModulos">Retornar</a>


