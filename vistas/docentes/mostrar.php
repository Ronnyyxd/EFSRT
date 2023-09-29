
<a href="?ctrl=CtrlDocentes&accion=nuevo">Nuevo Docente</a>
    <table class="table">
        <tr>
            <th>idPrograma_estudios</th>
            <th>Id</th>
           </tr>
<?php
if (is_array($datos))
foreach ($datos as $d) {
    ?>
<tr>
    <td>
        <?=$d['idPrograma_estudios']?>
    </td>
    <td>
        <?=$d['id']?>
    </td>
    <td>
        <a href="?ctrl=CtrlDocentes&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlDocentes&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>