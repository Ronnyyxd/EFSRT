<?php
$idPrograma_estudios = isset($datos['idPrograma_estudios'])?$datos['idPrograma_estudios']:'';
$id = isset($datos['id'])?$datos['id']:'';
$esNuevo = isset($datos['id'])?0:1;
?>
    <form action="?ctrl=CtrlDocentes&accion=guardar" method="post">
    idPrograma_estudios:
        <input class="form-control" type="text" name="idPrograma_estudios" value="<?=$idPrograma_estudios?>">
        <br>
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlDocentes">Retornar</a>