<?php
$id = isset($datos['id'])?$datos['id']:'';
$item = isset($datos['item'])?$datos['item']:'';
$nombre = isset($datos['nombre'])?$datos['nombre']:'';
$idTipo_indicador = isset($datos['idTipo_indicador'])?$datos['idTipo_indicador']:'';
$esNuevo = isset($datos['id'])?0:1;
?>
    <form action="?ctrl=CtrlIndicadores_evaluacion&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        item:
        <input class="form-control" type="text" name="item" value="<?=$item?>">
        <br>
        nombre:
        <input class="form-control" type="text" name="nombre" value="<?=$nombre?>">
        <br>
        idTipo_indicador:
        <input class="form-control" type="text" name="idTipo_indicador" value="<?=$idTipo_indicador?>">
        <br>
        <input class="btn btn-primary mb-3"  type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlIndicadores_evaluacion">Retornar</a>


