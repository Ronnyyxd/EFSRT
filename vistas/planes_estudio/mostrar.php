
<a href="?ctrl=CtrlPlanes_estudio&accion=nuevo">Nuevo Indicador Evaluacion</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Año</th>
            <th>Activo</th>
            <th>idPrograma</th>
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
        <?=$d['anio']?>
    </td>
    <td>
        <?=$d['activo']?>
    </td>
    <td>
        <?=$d['idPrograma']?>
    </td>

    <td>
        <a href="?ctrl=CtrlPlanes_estudio&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlPlanes_estudio&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>