<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<button class="btn btn-warning" type="button"><a href="?ctrl=CtrlPersonas&accion=nuevo">Nueva Persona</a></button>
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
    <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-dark" type="button"> <a href="?ctrl=CtrlPersonas&accion=editar&id=<?=$d['id']?>">
            <i class="bi bi-pencil"></i>
        </a>
        <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-dark" type="button">
        <a href="?ctrl=CtrlPersonas&accion=eliminar&id=<?=$d['id']?>"><i class="bi bi-trash2-fill"></i></a>
        
    </td>
</tr>

<?php
}
?>

    </table>
    <div class="d-grid gap-2 d-md-block">
    <button class="btn btn-dark" type="button">
    <a href="?">Retornar</a>
</body>
</html>