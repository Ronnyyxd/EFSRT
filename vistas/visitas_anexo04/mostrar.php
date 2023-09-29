
<a href="?ctrl=CtrlVisitas_anexo04&accion=nuevo">Nuevo </a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>numero</th>
            <th>fecha</th>
            <th>tareas</th>
            <th>porcentaje_avance</th>
            <th>idAnexo</th>
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
        <?=$d['numero']?>
    </td>
    <td>
        <?=$d['fecha']?>
    </td>
    <td>
        <?=$d['tareas']?>
    </td>
    <td>
        <?=$d['porcentaje_avance']?>
    </td>
    <td>
        <?=$d['idAnexo']?>
    </td>

    <td>
        <a href="?ctrl=CtrlVisitas_anexo04&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlVisitas_anexo04&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>