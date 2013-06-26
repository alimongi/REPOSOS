<div id="principal">
<h1>Listado de Empleados</h1>

<h2><caption><?php echo $resultados ?> Empleados en <?php echo $paginas ?> p&aacute;gina(s)</caption></h2>

<table>


  <thead>
    <tr>
      <th>Id</th>
      <th>Codigo</th>
      <th>Cargo</th>
      <th>Igreso</th>
      <th>Cedula</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Fecha de Nacimiento</th>
      <th>Telefono</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($empleados as $empleado): ?>
    <tr>
      <td><a href="<?php echo url_for('empleado/show2?id='.$empleado->getId()) ?>"><?php echo $empleado->getId() ?></a></td>
      <td><?php echo $empleado->getCodigo() ?></td>
      <td><?php echo $empleado->getCargo() ?></td>
      <td><?php echo date("d-m-Y ", strtotime($empleado->getFingreso())) ?></td>
      <td><?php echo $empleado->getCedula() ?></td>
      <td><?php echo $empleado->getNombre() ?></td>
      <td><?php echo $empleado->getApellido() ?></td>
      <td><?php echo date("d-m-Y ", strtotime($empleado->getFnacimiento())) ?></td>
      <td><?php echo $empleado->getTelefono() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php if($haveToPaginate): ?>
<div class="onlycssmenu-paging clearfix">
    <?php echo html_entity_decode($menu) ?>
</div>
<?php endif;?>




  <a href="<?php echo url_for('empleado/new') ?>">Nuevo</a>
</div>