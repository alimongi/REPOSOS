<div id="principal">
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $empleado->getId() ?></td>
      <th>Codigo:</th>
      <td><?php echo $empleado->getCodigo() ?></td>
      <th>Cedula:</th>
      <td><?php echo $empleado->getCedula() ?></td>
    </tr>
    <tr>
      <th>Nombres:</th>
      <td><?php echo $empleado->getNombre() ?></td>
      <th>Apellidos:</th>
      <td><?php echo $empleado->getApellido() ?></td>
      <th>Cargo:</th>
      <td><?php echo $empleado->getCargo() ?></td>
    </tr>
    <tr>
      <th>F / Ingreso:</th>
      <td><?php echo date("d-m-Y ", strtotime($empleado->getFingreso())) ?></td>
      <th>F / Nacimiento:</th>
      <td><?php echo date("d-m-Y ", strtotime($empleado->getFnacimiento())) ?></td>
      <th>Sexo:</th>
      <td><?php echo $empleado->getSexo() ?></td>
    </tr>
    <tr>
      <th>Activo Ivss:</th>
      <td><?php echo $empleado->getActivoivss() ?></td>
      <th>Telefono:</th>
      <td><?php echo $empleado->getTelefono() ?></td>
      <th>N / Hijos:</th>
      <td><?php echo $empleado->getNhijos() ?></td>
    </tr>
    <tr>
      <th>Nivel de Estudios:</th>
      <td><?php echo $empleado->getNestudios() ?></td>
      <th>Profesion:</th>
      <td><?php echo $empleado->getProfesion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('empleado/edit?id='.$empleado->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('empleado/index') ?>">Listar</a>

</div>
