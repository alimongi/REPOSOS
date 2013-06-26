<div id="principal">
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $nestudios->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $nestudios->getNombre() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $nestudios->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $nestudios->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Deleted at:</th>
      <td><?php echo $nestudios->getDeletedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('nestudioss/edit?id='.$nestudios->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('nestudioss/index') ?>">List</a>
</div>