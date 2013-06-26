<?php use_helper('I18N') ?>

<div id="login">
<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
    <?php if ($form['username']->hasError() || $form['password']->hasError()): ?>
    <p>El Usuario y/ó la Contraseña son Inválidos</p>
    <?php endif; ?>
    <p>
    <label for="username">Usuario</label>
    <?php echo $form['username']->render() ?></p>
    <p><label for="password">Contraseña</label>
    <?php echo $form['password']->render() ?></p>
    <?php echo $form['_csrf_token']->render() ?><br>
  <input type="submit" value="<?php echo __('Ingreso') ?>" class="boton" />

</form>
</div>