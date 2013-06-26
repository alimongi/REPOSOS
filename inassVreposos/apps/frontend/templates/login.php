<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div id="wrapper">
            <?php echo image_tag('cintillo.png') ?>
            <div id="header">
                <?php echo image_tag('RRHH4.png') ?>
                <?php if ($sf_user->getGuardUser()): ?>
                    <p style="display: inline; color: #FFFFFF; font-size: 10pt; font-family: verdana; float: right; margin: 2px 40px 1px 1px;">Bienvenido(a) | <a href="<?php echo url_for('@sf_guard_signout') ?>" class="link-blanco">Salir</a></p>
                    <p style="display: inline; color: #FFFFFF; font-size: 14pt; font-family: verdana; float: right; margin: 25px 250px 1px 1px;"> <?php echo $sf_user->getGuardUser()->getFirstName() ?> <?php echo $sf_user->getGuardUser()->getLastName() ?> | <?php echo $sf_user->getGuardUser()->getLastLogin() ?></p>
                <?php endif; ?>
                </div>


            <?php echo $sf_content ?>

            <div id="footer">Todos los derechos reservados. &copy; 2013 INASS -- Desarrollo: Alexis Limongi</div>
        </div>
    </body>
</html>
