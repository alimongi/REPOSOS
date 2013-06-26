<div id="principal">
<h1>Listado de Profesiones</h1>

<h2><caption><?php echo $resultados ?> Profeciones en <?php echo $paginas ?> p&aacute;gina(s)</caption></h2>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($profesions as $profesion): ?>
    <tr>
      <td><a href="<?php echo url_for('profesions/show?id='.$profesion->getId()) ?>"><?php echo $profesion->getId() ?></a></td>
      <td><?php echo $profesion->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php if($haveToPaginate): ?>
<div class="onlycssmenu-paging clearfix">
    <?php echo html_entity_decode($menu) ?>
</div>
<?php endif;?>


  <a href="<?php echo url_for('profesions/new') ?>">New</a>

</div>