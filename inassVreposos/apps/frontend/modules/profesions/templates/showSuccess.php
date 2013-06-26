<div id="principal">
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $profesion->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $profesion->getNombre() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $profesion->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $profesion->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Deleted at:</th>
      <td><?php echo $profesion->getDeletedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('profesions/edit?id='.$profesion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('profesions/index') ?>">List</a>
</div>