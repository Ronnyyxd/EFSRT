
<a href="?ctrl=CtrlTurnos&accion=nuevo">Nuevo Turno</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Turno</th>
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
        <?=$d['turno']?>
    </td>
    <td>
        <a href="?ctrl=CtrlTurnos&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlTurnos&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>