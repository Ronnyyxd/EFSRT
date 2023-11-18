<?php
$id = isset($datos['id'])?$datos['id']:'';
$item = isset($datos['item'])?$datos['item']:'';
$nombre = isset($datos['nombre'])?$datos['nombre']:'';
$esNuevo = isset($datos['id'])?0:1;
?>
<form action="?ctrl=CtrlTipos_indicadores&accion=guardar" method="post">
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
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlTipos_indicadores">Retornar</a>


