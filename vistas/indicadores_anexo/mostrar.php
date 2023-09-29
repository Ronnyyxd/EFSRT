
<a href="?ctrl=CtrlIndicadores_anexo&accion=nuevo">Nuevo Indicador</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>idAnexo</th>
            <th>idIndicador</th>
            <th>calificacion</th>
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
        <?=$d['idAnexo']?>
    </td>
    <td>
        <?=$d['idIndicador']?>
    </td>
    <td>
        <?=$d['calificacion']?>
    </td>
    

    <td>
        <a href="?ctrl=CtrlIndicadores_anexo&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlIndicadores_anexo&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>