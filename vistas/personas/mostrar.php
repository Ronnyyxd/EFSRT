
<a href="?ctrl=CtrlPersonas&accion=nuevo">Nueva Persona</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>nombres</th>
            <th>apellidos</th>
            <th>dni</th>
            <th>correo</th>
            <th>direccion</th>
            <th>Telefono</th>
            <th>password</th>
            <th>usuario</th>
            <th>fechaNacimiento</th>
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
        <?=$d['nombres']?>
    </td>
    <td>
        
        <?=$d['apellidos']?>
    </td>
    <td>
        <?=$d['dni']?>
    </td>
    <td>
        <?=$d['correo']?>
    </td>
    <td>
        <?=$d['direccion']?>
    </td>
    <td>
        <?=$d['Telefono']?>
    </td>
    <td>
        <?=$d['password']?>
    </td>
    <td>
        <?=$d['usuario']?>
    </td>
    <td>
        <?=$d['fechaNacimiento']?>
    </td>

    <td>
        <a href="?ctrl=CtrlPersonas&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlPersonas&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>