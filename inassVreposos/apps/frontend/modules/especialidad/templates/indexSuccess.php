<div id="principal">

<h1>Listado de Especialidades</h1>
<h2><caption><?php echo $resultados ?> Especialidades en <?php echo $paginas ?> p&aacute;gina(s)</caption></h2>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($especialidads as $especialidad): ?>
    <tr>
      <td><a href="<?php echo url_for('especialidad/show?id='.$especialidad->getId()) ?>"><?php echo $especialidad->getId() ?></a></td>
      <td><?php echo $especialidad->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php if($haveToPaginate): ?>
<div class="onlycssmenu-paging clearfix">
    <?php echo html_entity_decode($menu) ?>
</div>
<?php endif;?>

  <a href="<?php echo url_for('especialidad/new') ?>">Nuevo</a>

</div>