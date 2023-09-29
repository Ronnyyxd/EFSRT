
<a href="?ctrl=CtrlModulos&accion=nuevo">Nuevo Modulo</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>nombre</th>
            <th>horas</th>
            <th>creditos</th>
            <th>numero</th>
            <th>idPlan</th>
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
        <?=$d['nombre']?>
    </td>
    <td>
        <?=$d['horas']?>
    </td>
    <td>
        <?=$d['creditos']?>
    </td>
    <td>
        <?=$d['numero']?>
    </td>
    <td>
        <?=$d['idPlan']?>
    </td>

    <td>
        <a href="?ctrl=CtrlModulos&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlModulos&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>