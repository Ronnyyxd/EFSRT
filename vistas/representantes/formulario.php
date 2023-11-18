<?php
$id = isset($datos['id'])?$datos['id']:'';
$cargo = isset($datos['cargo'])?$datos['cargo']:'';
$esNuevo = isset($datos['id'])?0:1;
?>
    <form action="?ctrl=CtrlRepresentantes&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        cargo:
            <input class="form-control" type="text" name="cargo" value="<?=$cargo?>">
            <br>
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlRepresentantes">Retornar</a>
