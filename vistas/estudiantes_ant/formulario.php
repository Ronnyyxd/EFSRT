<?php
$id = isset($datos['id'])?$datos['id']:'';
$nombre = isset($datos['nombre'])?$datos['nombre']:'';
$esNuevo = isset($datos['id'])?0:1;
?>

    <form action="?ctrl=CtrlEstudiantes&accion=guardar" method="post">
    id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        idPrograma_estudios:
        <input class="form-control" type="text" name="id" value="<?=$nombre?>">
        <br>
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">
       

    </form>

    <a href="?ctrl=CtrlEstudiantes">Retornar</a>