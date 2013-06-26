
<?php header("Content-Disposition: attachment; filename=reporte-mensual.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h1> INASS C.S.S.A. MERCEDES DIAZ (VALERA - TRUJILLO) </h1>
<h3> Reporte de Reposos del Personal Obrero y Empleado </h3>
<h3> Mes: del <?php echo $fecha_inicial; ?> al <?php echo $fecha_final; ?> </h3>
<h3> Fecha de Elaboracion: <?php echo date("d-m-y"); ?> </h3>

<table>
  <thead>
<?php echo "<table border=1> ";?>
    <tr>
      <th>Nombres y Apellidos</th>
      <th>Cedula</th>
      <th>Cargo</th>
      <th>Activo SSO</th>
      <th>Desde</th>
      <th>Hasta</th>
      <th>No de Dias</th>
      <th>Forma (14-52)</th>
      <th>Inicio Reposo Continuo</th>
      <th>No de Dias</th>
      <th>Especialidad</th>
      <th>Centro Hospitalario</th>
      <th>Observacion</th>
    </tr>

  </thead>


    <?php foreach ($repososs as $reposos): ?>
 <?php echo "<table border=1> ";?> 
    <tr>
      <td><?php echo $reposos['nombre'] ?>  <?php echo $reposos['apellido'] ?></td>
      <td><?php echo $reposos['cedula'] ?></td>
      <td><?php echo $reposos['cargo'] ?></td>
      <td><?php echo $reposos['activo'] ?></td>
      <td><?php echo $reposos['inicio'] ?></td>
      <td><?php echo $reposos['fin'] ?></td>
      <td><?php echo $reposos['dias'] ?></td>
      <td><?php echo $reposos['forma'] ?></td>
      <td><?php echo $reposos['reposocont'] ?></td>
      <td><?php echo $reposos['ndias'] ?></td>
      <td><?php echo $reposos['especialidad'] ?></td>
      <td><?php echo $reposos['centro'] ?></td>
      <td><?php echo $reposos['observacion'] ?></td>
    </tr>

    <?php endforeach; ?>
</table>
<br>
<br>
<br>
<br>
<table>
<tr>
<td>Elaborado Por:</td>
<td></td>
<td></td>
<td></td> 
<td></td>
<td></td> 
<td>Confirmado Por:</td>
</tr>
<tr>
<td><?php echo $sf_user->getGuardUser()->getFirstName() ?> <?php echo $sf_user->getGuardUser()->getLastName() ?></td> 
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>  
<td>Yasneirys Castellano</td>
<tr>
<td><?php echo $sf_user->getGuardUser()->getCargo() ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>  
<td>Directora (E)</td>
</tr> 
</tr> 
</table>