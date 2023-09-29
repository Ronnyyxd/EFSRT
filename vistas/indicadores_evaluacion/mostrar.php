
<a href="?ctrl=CtrlIndicadores_evaluacion&accion=nuevo">Nuevo Indicador Evaluacion</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>item</th>
            <th>nombre</th>
            <th>idTipo_indicador</th>
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
        <?=$d['idTipo_indicador']?>
    </td>

    <td>
        <a href="?ctrl=CtrlIndicadores_evaluacion&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlIndicadores_evaluacion&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>