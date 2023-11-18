<?php
$NroModulo = isset($datos['NroModulo'])?$datos['NroModulo']:'';
$Fecha_desde = isset($datos['Fecha_desde'])?$datos['Fecha_desde']:'';
$Fecha_hasta = isset($datos['Fecha_hasta'])?$datos['Fecha_hasta']:'';
$horario = isset($datos['horario'])?$datos['horario']:'';
$observaciones = isset($datos['observaciones'])?$datos['observaciones']:'';
$pago_por = isset($datos['pago_por'])?$datos['pago_por']:'';
$movilidad = isset($datos['movilidad'])?$datos['movilidad']:'';
$otros = isset($datos['otros'])?$datos['otros']:'';
$solo_EFSRT = isset($datos['solo_EFSRT'])?$datos['solo_EFSRT']:'';
$idEmpresa = isset($datos['idEmpresa'])?$datos['idEmpresa']:'';
$idEstudiante = isset($datos['idEstudiante'])?$datos['idEstudiante']:'';
$idModulo = isset($datos['idModulo'])?$datos['idModulo']:'';
$detalle_otros = isset($datos['detalle_otros'])?$datos['detalle_otros']:'';
$esNuevo = isset($datos['NroModulo'])?0:1;
?>
    <form action="?ctrl=CtrlAnexo03&accion=guardar" method="post">
        NroModulo:
        <input class="form-control" type="text" name="NroModulo" value="<?=$NroModulo?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        Fecha_desde:
        <input class="form-control" type="date" name="Fecha_desde" value="<?=$Fecha_desde?>">
        <br>
        Fecha_hasta:
        <input class="form-control" type="date" name="Fecha_hasta" value="<?=$Fecha_hasta?>">
        <br>
        horario:
        <input class="form-control" type="time" name="horario" value="<?=$horario?>">
        <br>
        observaciones:
        <input class="form-control" type="text" name="observaciones" value="<?=$observaciones?>">
        <br>
        pago_por:
        <input class="form-control" type="text" name="pago_por" value="<?=$pago_por?>">
        <br>
        movilidad:
        <input class="form-control" type="text" name="movilidad" value="<?=$movilidad?>">
        <br>
        otros:
        <input class="form-control" type="text" name="otros" value="<?=$otros?>">
        <br>
        solo_EFSRT:
        <input class="form-control" type="text" name="solo_EFSRT" value="<?=$solo_EFSRT?>">
        <br>
        idEmpresa:
        <input class="form-control" type="text" name="idEmpresa" value="<?=$idEmpresa?>">
        <br>
        idEstudiante:
        <input class="form-control" type="text" name="idEstudiante" value="<?=$idEstudiante?>">
        <br>
        idModulo:
        <select name="NroModulo" idModulo="">
            <?php
            $esSeleccionado=null;
            if (is_array ($modulo))
            foreach ($modulo as $m) { 
                $esSeleccionado='';
                if($NroModulo==$m['idModulo'])
                    $esSeleccionado='selected';
            ?>
                
                <option <?=$esSeleccionado?> value="<?=$m['id']?>"> <?=$m['nombre']?></option>
            <?php
            }
            ?>

        </select>
        
        <br>
        idModulo:
        <input class="form-control" type="text" name="idModulo" value="<?=$idModulo?>">
        <br>
        detalle_otros:
        <input class="form-control" type="text" name="detalle_otros" value="<?=$detalle_otros?>">
        <br>
        
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">

    </form>
            
    <a href="?ctrl=CtrlAnexo03">Retornar</a>


