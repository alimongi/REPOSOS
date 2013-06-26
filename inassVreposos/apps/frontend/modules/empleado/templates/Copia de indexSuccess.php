<div id="principal">
<h1>Listado de Empleados</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Codigo</th>
      <th>Cargo</th>
      <th>Fingreso</th>
      <th>Activoivss</th>
      <th>Cedula</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Sexo</th>
      <th>Fnacimiento</th>
      <th>Telefono</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Deleted at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($empleados as $empleado): ?>
    <tr>
      <td><a href="<?php echo url_for('empleado/show?id='.$empleado->getId()) ?>"><?php echo $empleado->getId() ?></a></td>
      <td><?php echo $empleado->getCodigo() ?></td>
      <td><?php echo $empleado->getCargo() ?></td>
      <td><?php echo $empleado->getFingreso() ?></td>
      <td><?php echo $empleado->getActivoivss() ?></td>
      <td><?php echo $empleado->getCedula() ?></td>
      <td><?php echo $empleado->getNombre() ?></td>
      <td><?php echo $empleado->getApellido() ?></td>
      <td><?php echo $empleado->getSexo() ?></td>
      <td><?php echo $empleado->getFnacimiento() ?></td>
      <td><?php echo $empleado->getTelefono() ?></td>
      <td><?php echo $empleado->getCreatedAt() ?></td>
      <td><?php echo $empleado->getUpdatedAt() ?></td>
      <td><?php echo $empleado->getDeletedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('empleado/new') ?>">New</a>
</div>