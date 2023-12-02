<?php
$id = isset($datos['id'])?$datos['id']:'';
$idAnexo = isset($datos['idAnexo'])?$datos['idAnexo']:'';
$idIndicador = isset($datos['idIndicador'])?$datos['idIndicador']:'';
$calificacion = isset($datos['calificaccion'])?$datos['calificacion']:'';
$esNuevo = isset($datos['id'])?0:1;
?>
    <form action="?ctrl=CtrlIndicadores_anexo&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        idAnexo:
        <input class="form-control" type="text" name="idAnexo" value="<?=$idAnexo?>">
        <br>
        idIndicador:
        <input class="form-control" type="text" name="idIndicador" value="<?=$idIndicador?>">
        <br>
        calificacion:
        <input class="form-control" type="text" name="calificacion" value="<?=$calificacion?>">
        <br>
        <br>
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlIndicadores_anexo">Retornar</a>


