<div id="principal">
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $especialidad->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $especialidad->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $especialidad->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $especialidad->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Deleted at:</th>
      <td><?php echo $especialidad->getDeletedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('especialidad/edit?id='.$especialidad->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('especialidad/index') ?>">Listar</a>
</div>