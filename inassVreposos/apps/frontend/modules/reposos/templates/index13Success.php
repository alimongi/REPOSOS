<?php header("Content-Disposition: attachment; filename=reporte-anual.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h1> INASS C.S.S.A. MERCEDES DIAZ (VALERA - TRUJILLO) </h1>
<h3> Reporte de Reposos del Personal Obrero y Empleado </h3>
<h3> Año: 2013 </h3>
<h3> Fecha de Elaboracion: <?php echo date("d-m-y"); ?> </h3>



<table>
  <thead>
<?php echo "<table border=1> ";?>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>ENERO</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
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
    <?php foreach ($repososene as $reposos): ?>
    <tr>
      <td><?php echo $reposos['nombre'] ?>  <?php echo $reposos['apellido'] ?></td>
      <td><?php echo $reposos['cedula'] ?></td>
      <td><?php echo $reposos['cargo'] ?></td>
      <td><?php echo $reposos['activo'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['inicio'])) ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['fin'])) ?></td>
      <td><?php echo $reposos['dias'] ?></td>
      <td><?php echo $reposos['forma'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['reposocont'])) ?></td>
      <td><?php echo $reposos['ndias'] ?></td>
      <td><?php echo $reposos['especialidad'] ?></td>
      <td><?php echo $reposos['centro'] ?></td>
      <td><?php echo $reposos['observacion'] ?></td>
    </tr>
    <?php endforeach; ?> 
</table>

<table>
  <thead>
<?php echo "<table border=1> ";?>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>FEBRERO</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
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
    <?php foreach ($repososfeb as $reposos): ?>
    <tr>
      <td><?php echo $reposos['nombre'] ?>  <?php echo $reposos['apellido'] ?></td>
      <td><?php echo $reposos['cedula'] ?></td>
      <td><?php echo $reposos['cargo'] ?></td>
      <td><?php echo $reposos['activo'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['inicio'])) ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['fin'])) ?></td>
      <td><?php echo $reposos['dias'] ?></td>
      <td><?php echo $reposos['forma'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['reposocont'])) ?></td>
      <td><?php echo $reposos['ndias'] ?></td>
      <td><?php echo $reposos['especialidad'] ?></td>
      <td><?php echo $reposos['centro'] ?></td>
      <td><?php echo $reposos['observacion'] ?></td>
    </tr>
    <?php endforeach; ?> 
</table>

<table>
  <thead>
<?php echo "<table border=1> ";?>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>MARZO</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
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
    <?php foreach ($repososmar as $reposos): ?>
    <tr>
      <td><?php echo $reposos['nombre'] ?>  <?php echo $reposos['apellido'] ?></td>
      <td><?php echo $reposos['cedula'] ?></td>
      <td><?php echo $reposos['cargo'] ?></td>
      <td><?php echo $reposos['activo'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['inicio'])) ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['fin'])) ?></td>
      <td><?php echo $reposos['dias'] ?></td>
      <td><?php echo $reposos['forma'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['reposocont'])) ?></td>
      <td><?php echo $reposos['ndias'] ?></td>
      <td><?php echo $reposos['especialidad'] ?></td>
      <td><?php echo $reposos['centro'] ?></td>
      <td><?php echo $reposos['observacion'] ?></td>
    </tr>
    <?php endforeach; ?> 
</table>

<table>
  <thead>
<?php echo "<table border=1> ";?>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>ABRIL</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
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
    <?php foreach ($repososabr as $reposos): ?>
    <tr>
      <td><?php echo $reposos['nombre'] ?>  <?php echo $reposos['apellido'] ?></td>
      <td><?php echo $reposos['cedula'] ?></td>
      <td><?php echo $reposos['cargo'] ?></td>
      <td><?php echo $reposos['activo'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['inicio'])) ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['fin'])) ?></td>
      <td><?php echo $reposos['dias'] ?></td>
      <td><?php echo $reposos['forma'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['reposocont'])) ?></td>
      <td><?php echo $reposos['ndias'] ?></td>
      <td><?php echo $reposos['especialidad'] ?></td>
      <td><?php echo $reposos['centro'] ?></td>
      <td><?php echo $reposos['observacion'] ?></td>
    </tr>
    <?php endforeach; ?> 
</table>

<table>
  <thead>
<?php echo "<table border=1> ";?>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>MAYO</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
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
    <?php foreach ($repososmay as $reposos): ?>
    <tr>
      <td><?php echo $reposos['nombre'] ?>  <?php echo $reposos['apellido'] ?></td>
      <td><?php echo $reposos['cedula'] ?></td>
      <td><?php echo $reposos['cargo'] ?></td>
      <td><?php echo $reposos['activo'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['inicio'])) ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['fin'])) ?></td>
      <td><?php echo $reposos['dias'] ?></td>
      <td><?php echo $reposos['forma'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['reposocont'])) ?></td>
      <td><?php echo $reposos['ndias'] ?></td>
      <td><?php echo $reposos['especialidad'] ?></td>
      <td><?php echo $reposos['centro'] ?></td>
      <td><?php echo $reposos['observacion'] ?></td>
    </tr>
    <?php endforeach; ?> 
</table>

<table>
  <thead>
<?php echo "<table border=1> ";?>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>JUNIO</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
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
    <?php foreach ($repososjun as $reposos): ?>
    <tr>
      <td><?php echo $reposos['nombre'] ?>  <?php echo $reposos['apellido'] ?></td>
      <td><?php echo $reposos['cedula'] ?></td>
      <td><?php echo $reposos['cargo'] ?></td>
      <td><?php echo $reposos['activo'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['inicio'])) ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['fin'])) ?></td>
      <td><?php echo $reposos['dias'] ?></td>
      <td><?php echo $reposos['forma'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['reposocont'])) ?></td>
      <td><?php echo $reposos['ndias'] ?></td>
      <td><?php echo $reposos['especialidad'] ?></td>
      <td><?php echo $reposos['centro'] ?></td>
      <td><?php echo $reposos['observacion'] ?></td>
    </tr>
    <?php endforeach; ?> 
</table>

<table>
  <thead>
<?php echo "<table border=1> ";?>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>JULIO</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
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
    <?php foreach ($repososjul as $reposos): ?>
    <tr>
      <td><?php echo $reposos['nombre'] ?>  <?php echo $reposos['apellido'] ?></td>
      <td><?php echo $reposos['cedula'] ?></td>
      <td><?php echo $reposos['cargo'] ?></td>
      <td><?php echo $reposos['activo'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['inicio'])) ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['fin'])) ?></td>
      <td><?php echo $reposos['dias'] ?></td>
      <td><?php echo $reposos['forma'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['reposocont'])) ?></td>
      <td><?php echo $reposos['ndias'] ?></td>
      <td><?php echo $reposos['especialidad'] ?></td>
      <td><?php echo $reposos['centro'] ?></td>
      <td><?php echo $reposos['observacion'] ?></td>
    </tr>
    <?php endforeach; ?> 
</table>

<table>
  <thead>
<?php echo "<table border=1> ";?>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>AGOSTO</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
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
    <?php foreach ($repososago as $reposos): ?>
    <tr>
      <td><?php echo $reposos['nombre'] ?>  <?php echo $reposos['apellido'] ?></td>
      <td><?php echo $reposos['cedula'] ?></td>
      <td><?php echo $reposos['cargo'] ?></td>
      <td><?php echo $reposos['activo'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['inicio'])) ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['fin'])) ?></td>
      <td><?php echo $reposos['dias'] ?></td>
      <td><?php echo $reposos['forma'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['reposocont'])) ?></td>
      <td><?php echo $reposos['ndias'] ?></td>
      <td><?php echo $reposos['especialidad'] ?></td>
      <td><?php echo $reposos['centro'] ?></td>
      <td><?php echo $reposos['observacion'] ?></td>
    </tr>
    <?php endforeach; ?> 
</table>

<table>
  <thead>
<?php echo "<table border=1> ";?>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>SEPTIEMBRE</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
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
    <?php foreach ($reposossep as $reposos): ?>
    <tr>
      <td><?php echo $reposos['nombre'] ?>  <?php echo $reposos['apellido'] ?></td>
      <td><?php echo $reposos['cedula'] ?></td>
      <td><?php echo $reposos['cargo'] ?></td>
      <td><?php echo $reposos['activo'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['inicio'])) ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['fin'])) ?></td>
      <td><?php echo $reposos['dias'] ?></td>
      <td><?php echo $reposos['forma'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['reposocont'])) ?></td>
      <td><?php echo $reposos['ndias'] ?></td>
      <td><?php echo $reposos['especialidad'] ?></td>
      <td><?php echo $reposos['centro'] ?></td>
      <td><?php echo $reposos['observacion'] ?></td>
    </tr>
    <?php endforeach; ?> 
</table>

<table>
  <thead>
<?php echo "<table border=1> ";?>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>OCTUBRE</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
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
    <?php foreach ($repososoct as $reposos): ?>
    <tr>
      <td><?php echo $reposos['nombre'] ?>  <?php echo $reposos['apellido'] ?></td>
      <td><?php echo $reposos['cedula'] ?></td>
      <td><?php echo $reposos['cargo'] ?></td>
      <td><?php echo $reposos['activo'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['inicio'])) ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['fin'])) ?></td>
      <td><?php echo $reposos['dias'] ?></td>
      <td><?php echo $reposos['forma'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['reposocont'])) ?></td>
      <td><?php echo $reposos['ndias'] ?></td>
      <td><?php echo $reposos['especialidad'] ?></td>
      <td><?php echo $reposos['centro'] ?></td>
      <td><?php echo $reposos['observacion'] ?></td>
    </tr>
    <?php endforeach; ?> 
</table>

<table>
  <thead>
<?php echo "<table border=1> ";?>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>NOVIEMBRE</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
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
    <?php foreach ($repososnov as $reposos): ?>
    <tr>
      <td><?php echo $reposos['nombre'] ?>  <?php echo $reposos['apellido'] ?></td>
      <td><?php echo $reposos['cedula'] ?></td>
      <td><?php echo $reposos['cargo'] ?></td>
      <td><?php echo $reposos['activo'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['inicio'])) ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['fin'])) ?></td>
      <td><?php echo $reposos['dias'] ?></td>
      <td><?php echo $reposos['forma'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['reposocont'])) ?></td>
      <td><?php echo $reposos['ndias'] ?></td>
      <td><?php echo $reposos['especialidad'] ?></td>
      <td><?php echo $reposos['centro'] ?></td>
      <td><?php echo $reposos['observacion'] ?></td>
    </tr>
    <?php endforeach; ?> 
</table>

<table>
  <thead>
<?php echo "<table border=1> ";?>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>DICIEMBRE</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
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
    <?php foreach ($repososdic as $reposos): ?>
    <tr>
      <td><?php echo $reposos['nombre'] ?>  <?php echo $reposos['apellido'] ?></td>
      <td><?php echo $reposos['cedula'] ?></td>
      <td><?php echo $reposos['cargo'] ?></td>
      <td><?php echo $reposos['activo'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['inicio'])) ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['fin'])) ?></td>
      <td><?php echo $reposos['dias'] ?></td>
      <td><?php echo $reposos['forma'] ?></td>
      <td><?php echo date("d-m-y ", strtotime($reposos['reposocont'])) ?></td>
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