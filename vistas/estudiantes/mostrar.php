
<a href="?ctrl=CtrlEstudiantes&accion=nuevo">Nuevo Estudiantes</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>idPrograma_estudios</th>
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
        <?=$d['idPrograma_estudios']?>
    </td>
    <td>
        <a href="?ctrl=CtrlEstudiantes&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlEstudiantes&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>