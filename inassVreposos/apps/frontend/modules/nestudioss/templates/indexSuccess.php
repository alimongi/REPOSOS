<div id="principal">
<h1>Listado de Niveles de Estudio</h1>

<h2><caption><?php echo $resultados ?> Niveles en <?php echo $paginas ?> p&aacute;gina(s)</caption></h2>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($nestudioss as $nestudios): ?>
    <tr>
      <td><a href="<?php echo url_for('nestudioss/show?id='.$nestudios->getId()) ?>"><?php echo $nestudios->getId() ?></a></td>
      <td><?php echo $nestudios->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php if($haveToPaginate): ?>
<div class="onlycssmenu-paging clearfix">
    <?php echo html_entity_decode($menu) ?>
</div>
<?php endif;?>



  <a href="<?php echo url_for('nestudioss/new') ?>">New</a>
</div>
