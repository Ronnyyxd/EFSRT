
   
<table class="table">
<thead>
        <tr>
            
            <th>Modulo</th>

            </tr>
      </thead>
      <tbody>
<?php

if (is_array($datos))
foreach ($datos as $d) {
    ?>
<tr>
  
    <td>
      <a class="btn btn-primary" href="?ctrl=CtrlVisitas_anexo04&accion=visitasXEstudiante&idAnexo=<?=$d['id']?>&id=<?=$d['idEstudiante']?>&idModulo=<?=$d['idModulo']?>">
       Módulo  <?=$d['idModulo']?>
        </a>
    </td>
    

</tr>

<?php
}
?>
      </tbody>
    </table>

    <a href="?">Retornar</a>

    