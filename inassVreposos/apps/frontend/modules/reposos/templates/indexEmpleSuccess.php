<div id="principal">
<h1>Listado de Reposos</h1>


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
<?php $contador=0; ?>
    <?php foreach ($repososs as $reposos): ?> 
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
<?php $contador=$contador + 1; ?>
    </tr>
    <?php endforeach; ?>
</table>

<h2> Total de Reposos del empleado   <?php echo $contador ?>  </h2>

</div>
