<?php
$id = isset($datos['id'])?$datos['id']:'';
$fecha_inicio = isset($datos['fecha_inicio'])?$datos['fecha_inicio']:'';
$fecha_fin = isset($datos['fecha_fin'])?$datos['fecha_fin']:'';
$problemas_detectados = isset($datos['problemas_detectados'])?$datos['problemas_detectados']:'';
$observaciones = isset($datos['observaciones'])?$datos['observaciones']:'';
$idEstudiante = isset($datos['idEstudiante'])?$datos['idEstudiante']:'';
$idPrograma_estudios = isset($datos['idPrograma_estudios'])?$datos['idPrograma_estudios']:'';
$idModulo = isset($datos['idModulo'])?$datos['idModulo']:'';
$idEmpresa = isset($datos['idEmpresa'])?$datos['idEmpresa']:'';
$idDocente = isset($datos['idDocente'])?$datos['idDocente']:'';
$esNuevo = isset($datos['id'])?0:1;
?>
    <form action="?ctrl=CtrlAnexo04&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        fecha_inicio:
        <input class="form-control" type="date" name="fecha_inicio" value="<?=$fecha_inicio?>">
        <br>
        fecha_fin:
        <input class="form-control" type="date" name="fecha_fin" value="<?=$fecha_fin?>">
        <br>
        problemas_detectados:
        <input class="form-control" type="text" name="problemas_detectados" value="<?=$problemas_detectados?>">
        <br>
        observaciones:
        <input class="form-control" type="text" name="observaciones" value="<?=$observaciones?>">
        <br>
        idEstudiante:
        <input class="form-control" type="text" name="idEstudiante" value="<?=$idEstudiante?>">
        <br>
        idPrograma_estudios:
        <input class="form-control" type="text" name="idPrograma_estudios" value="<?=$idPrograma_estudios?>">
        <br>
        idModulo:
        <input class="form-control" type="text" name="idModulo" value="<?=$idModulo?>">
        <br>
        idEmpresa:
        <input class="form-control" type="text" name="idEmpresa" value="<?=$idEmpresa?>">
        <br>
        idDocente:
        <input class="form-control" type="text" name="idDocente" value="<?=$idDocente?>">
        <br>
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlAnexo04">Retornar</a>
