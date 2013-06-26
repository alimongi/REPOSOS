<div id="principal">
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $centros->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $centros->getNombre() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $centros->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $centros->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Deleted at:</th>
      <td><?php echo $centros->getDeletedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('centros/edit?id='.$centros->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('centros/index') ?>">Listar</a>

</div>