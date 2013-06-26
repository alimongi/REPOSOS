<div id="principal">

<h1>Listado de Centros Medicos</h1>

<h2><caption><?php echo $resultados ?> Centros Medicos en <?php echo $paginas ?> p&aacute;gina(s)</caption></h2>

<table>


  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($centross as $centros): ?>
    <tr>
      <td><a href="<?php echo url_for('centros/show?id='.$centros->getId()) ?>"><?php echo $centros->getId() ?></a></td>
      <td><?php echo $centros->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php if($haveToPaginate): ?>
<div class="onlycssmenu-paging clearfix">
    <?php echo html_entity_decode($menu) ?>
</div>
<?php endif;?>

  <a href="<?php echo url_for('centros/new') ?>">Nuevo</a>

</div>