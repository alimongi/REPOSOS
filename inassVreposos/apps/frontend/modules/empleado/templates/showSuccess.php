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
      <th>Nombre:</th>
      <td><?php echo $empleado->getNombre() ?></td>
      <th>Apellido:</th>
      <td><?php echo $empleado->getApellido() ?></td>
      <th>Cargo:</th>
      <td><?php echo $empleado->getCargo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('reposos/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('reposos/index') ?>">Regresar</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'reposos/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Salvar" />
        </td>
      </tr>
    </tfoot>
    <tbody>

      <?php echo $form ?>
    </tbody>
  </table>
</form>


</div>
