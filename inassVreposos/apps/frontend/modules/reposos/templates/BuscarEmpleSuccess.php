 

<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<div id="content" title="Buscar Empleado">
    <?php if($sf_user->hasFlash('notice')): ?>
    <div><p><?php echo $sf_user->getFlash('notice')?></p></div>
    <?php endif?>
    <form method="post" action="<?php echo url_for('reposos/mostraremple')?>">
<fieldset>
<label for="ci_empleado">Cedula del Empleado</label>
<input type="text" name="ci_empleado" id="ci_empleado" />
<br>
<br>
<br>
<label for="fecha_inicial">Fecha Inicial</label>
<?php echo $form['fecha_inicial']->render() ?>
<label for="fecha_final">Fecha Final</label>
<?php echo $form['fecha_final']->render() ?>
<br>
<br>
<input type="submit" value="Buscar" />
</fieldset>
</form>
</div>

