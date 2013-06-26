<div id="principal">
<h1>Listado de Reposos</h1>


<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Empleado</th>
      <th>F / Inicio</th>
      <th>Dias</th>
      <th>F / Fin</th>
      <th>Especialidad</th>
      <th>Centros</th>
      <th>Observacion</th>
    </tr>
  </thead>
<?php $contador=0; ?>
<?php $fecha=date("d-m-Y"); ?>
  <tbody>
    <?php foreach ($repososs as $reposos): ?>
    <?php if($fecha == date("d-m-Y", strtotime($reposos->getCreatedAt()))) { ?>
 <?php $contador=$contador+1; ?>   
    <tr>
      <td><a href="<?php echo url_for('reposos/show?id='.$reposos->getId()) ?>"><?php echo $reposos->getId() ?></a></td>
      <td><?php echo $reposos->getEmpleado() ?></td>
      <td><?php echo date("d-m-Y ", strtotime($reposos->getFinicio())) ?></td>
      <td><?php echo $reposos->getDias() ?></td>
      <td><?php echo date("d-m-Y ", strtotime($reposos->getFfin())) ?></td>
      <td><?php echo $reposos->getEspecialidad() ?></td>
      <td><?php echo $reposos->getCentros() ?></td>
      <td><?php echo $reposos->getObservacion() ?></td>
    </tr>
    <?php } ?>
    <?php endforeach; ?>
  </tbody>
</table>

<h2><caption><?php echo $contador ?> Reposos en <?php echo $paginas ?> p&aacute;gina(s)</caption></h2>

<?php if($haveToPaginate): ?>
<div class="onlycssmenu-paging clearfix">
    <?php echo html_entity_decode($menu) ?>
</div>
<?php endif;?>


</div>
