<?php
$id = isset($datos['id'])?$datos['id']:'';
$idPrograma_estudios = isset($datos['idPrograma_estudios'])?$datos['idPrograma_estudios']:'';
$esNuevo = isset($datos['id'])?0:1;

?>
    <form action="?ctrl=CtrlEstudiantes&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        idPrograma_estudios:
            <input class="form-control" type="text" name="idPrograma_estudios" value="<?=$idPrograma_estudios?>">
            <br>
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlEstudiantes">Retornar</a>