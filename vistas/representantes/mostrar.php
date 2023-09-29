
<a href="?ctrl=CtrlRepresentantes&accion=nuevo">Nuevo Representante</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>cargo</th>
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
        <?=$d['cargo']?>
    </td>
    <td>
        <a href="?ctrl=CtrlRepresentantes&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlRepresentantes&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>