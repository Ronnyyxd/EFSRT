
<a href="?ctrl=CtrlTipos_indicadores&accion=nuevo">Nuevo</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>item</th>
            <th>nombre</th>
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
        <?=$d['item']?>
    </td>
    <td>
        <?=$d['nombre']?>
    </td>

    <td>
        <a href="?ctrl=CtrlTipos_indicadores&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlTipos_indicadores&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>