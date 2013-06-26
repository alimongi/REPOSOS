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

    <?php if($sf_user->hasFlash('notice')): ?>
    <div id="mensaje"><p><?php echo $sf_user->getFlash('notice')?></p></div>
    <?php endif?>

    <body>
        <div id="wrapper">
            <?php echo image_tag('cintillo.png') ?>
            <div id="header">
                <?php echo image_tag('RRHH4.png') ?>
                <?php if ($sf_user->getGuardUser()): ?>
                    <p style="display: inline; color: #FFFFFF; font-size: 10pt; font-family: verdana; float: right; margin: 2px 40px 1px 1px;">Bienvenido(a) | <a href="<?php echo url_for('@sf_guard_signout') ?>" class="link-blanco">Salir</a></p>
                    <p style="display: inline; color: #FFFFFF; font-size: 14pt; font-family: verdana; float: right; margin: 25px 250px 1px 1px;"> <?php echo $sf_user->getGuardUser()->getFirstName() ?> <?php echo $sf_user->getGuardUser()->getLastName() ?> | <?php echo $sf_user->getGuardUser()->getCargo() ?></p>
                <?php endif; ?>
                </div>

<div id="container">
<div class="accordion">
        <section id="one">
                <h2><a href="#one">Principal</a></h2>
                <div>
                    <ul>
                    <li><a href="<?php echo url_for('main/index')?>">Pagina Principal</a></li>
                    <li><a href="<?php echo url_for('main/ChangePasswd')?>">Cambiar Password</a></li>
                    <li><a href="<?php echo url_for('@sf_guard_signout')?>">Salir</a></li>
                    </ul>
                </div>
        </section>
        <section id="two">
                <h2><a href="#two">Configuración</a></h2>
                <div>
                    <ul>
                     <li><a href="<?php echo url_for('empleado/Index')?>">Administrar Trabajadores</a></li>
                     <li><a href="<?php echo url_for('centros/Index')?>">Administrar Centro Medíco</a></li>   
                     <li><a href="<?php echo url_for('especialidad/Index')?>">Administrar Patología</a></li> 
                     <li><a href="<?php echo url_for('profesions/Index')?>">Administrar Profesiones</a></li> 
                     <li><a href="<?php echo url_for('nestudioss/Index')?>">Administrar Nivel de Estudio</a></li> 
                    </ul>
                </div>
        </section>
        <section id="three">
                <h2><a href="#three">Reposo</a></h2>
                <div>
                    <ul>
                    <li><a href="<?php echo url_for('empleado/BuscarEmpleado')?>">Registrar Reposo</a></li>
                    <li><a href="<?php echo url_for('reposos/Index')?>">Ver Reposos del dia</a></li>
                    <li><a href="<?php echo url_for('reposos/BuscarEmple')?>">Reporte por Trabajador</a></li>
                    <li><a href="<?php echo url_for('reposos/BuscarxFecha')?>">Reporte por fecha</a></li>
                    <li><a href="<?php echo url_for('reposos/BuscarxAnual')?>">Reporte Anual</a></li>
                    </ul>
                </div>
        </section>
        <section id="four">
                <h2><a href="#four"> </a></h2>
                <div>
                    <ul>
                    </ul>
                </div>
        </section>
 </div>
</div>



            <?php echo $sf_content ?>

            <div id="footer">Todos los derechos reservados. &copy; 2013 INASS -- Desarrollo: Alexis Limongi</div>
        </div>




    </body>
</html>
