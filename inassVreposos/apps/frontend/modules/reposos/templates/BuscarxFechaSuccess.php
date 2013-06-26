<div id="principal">


<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<div id="content">
    <?php if($sf_user->hasFlash('notice')): ?>
<!--    <div id="mensaje"><p><?php echo $sf_user->getFlash('notice')?></p></div>-->
    <?php endif?>

<form method="post" action="<?php echo url_for('reposos/mostrar')?>">
<fieldset>
<label for="fecha_inicial">Fecha Inicial</label>
<?php echo $form['fecha_inicial']->render() ?>
<br>
<label for="fecha_final">Fecha Final</label>
<?php echo $form['fecha_final']->render() ?>
<br>
<br>
<input type="submit" value="Buscar" />
</fieldset>
</form>

</div>


</div>