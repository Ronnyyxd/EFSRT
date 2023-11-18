<?php
$id = isset($datos['id'])?$datos['id']:'';
$RazonSocial = isset($datos['RazonSocial'])?$datos['RazonSocial']:'';
$Direccion = isset($datos['Direccion'])?$datos['Direccion']:'';
$Telefono = isset($datos['Telefono'])?$datos['Telefono']:'';
$rubro = isset($datos['rubro'])?$datos['rubro']:'';
$idRepresentante = isset($datos['idRepresentante'])?$datos['idRepresentante']:'';
$RUC = isset($datos['RUC'])?$datos['RUC']:'';
$esActiva = isset($datos['esActiva'])?$datos['esActiva']:'';
$esNuevo = isset($datos['id'])?0:1;
?>
    <form action="?ctrl=CtrlEmpresas&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        RazonSocial:
        <input class="form-control" type="text" name="RazonSocial" value="<?=$RazonSocial?>">
        <br>
        Direccion:
        <input class="form-control" type="text" name="Direccion" value="<?=$Direccion?>">
        <br>
        Telefono:
        <input class="form-control" type="text" name="Telefono" value="<?=$Telefono?>">
        <br>
        rubro:
        <input class="form-control" type="text" name="rubro" value="<?=$rubro?>">
        <br>
        idRepresentante:
        <input class="form-control" type="text" name="idRepresentante" value="<?=$idRepresentante?>">
        <br>
        RUC:
        <input class="form-control" type="text" name="RUC" value="<?=$RUC?>">
        <br>
        esActiva:
        <input class="form-control" type="text" name="esActiva" value="<?=$esActiva?>">
        <br>
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlEmpresas">Retornar</a>


