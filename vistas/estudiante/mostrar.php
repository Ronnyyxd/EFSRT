

<a href="?ctrl=CtrlEstudiante&accion=nuevo">Nuevo Estudiante</a>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>correo</th>
            <th>direccion</th>
            <th>Teléfono</th>
            <th>Fecha Nac.</th>
            <th>Programa Estud.</th>
            <th>Opciones</th>
        </tr>
<?php
if (is_array($datos))
foreach ($datos as $d) {
    ?>
<tr>
    <td>
        <?=$d['id']?>
    </td>
    <td><?=$d['nombres']?></td>
    <td><?=$d['apellidos']?></td>
    <td><?=$d['dni']?></td>
    <td><?=$d['correo']?></td>
    <td><?=$d['direccion']?></td>
    <td><?=$d['Telefono']?></td>
    <td><?=$d['fechaNacimiento']?></td>
    <td><?=$d['programa']?></td>
    <td>
        
        <a href="?ctrl=CtrlVisitas_anexo04&accion=getModulosXEstudiante&id=<?=$d['id']?>"class="btn btn-success">
            <i class="fa fa"></i> Registra Visita</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
