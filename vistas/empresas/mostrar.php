
<a href="?ctrl=CtrlEmpresas&accion=nuevo">Nuevo </a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>RazonSocial</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>rubro</th>
            <th>idRepresentante</th>
            <th>RUC</th>
            <th>esActiva</th>
        </tr>
<?php
if (is_array($datos))
foreach ($datos as $d) {
    ?>
<tr>
    <td>
        <?=$d['id']?>
    </td>
    <td>
        <?=$d['RazonSocial']?>
    </td>
    <td>
        <?=$d['Direccion']?>
    </td>
    <td>
        <?=$d['Telefono']?>
    </td>
    <td>
        <?=$d['rubro']?>
    </td>
    <td>
        <?=$d['idRepresentante']?>
    </td>
    <td>
        <?=$d['RUC']?>
    </td>
    <td>
        <?=$d['esActiva']?>
    </td>

    <td>
        <a href="?ctrl=CtrlEmpresas&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlEmpresas&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>