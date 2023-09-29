
<a href="?ctrl=CtrlProgramas_estudios&accion=nuevo">Nuevo</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>nombre</th>
            <th>logo</th>
            <th>idTurno</th>
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
        <?=$d['logo']?>
    </td>
    <td>
        <?=$d['idTurno']?>
    </td>

    <td>
        <a href="?ctrl=CtrlProgramas_estudios&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlProgramas_estudios&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>