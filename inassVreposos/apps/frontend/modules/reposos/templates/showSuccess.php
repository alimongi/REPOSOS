<div id="principal">
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $reposos->getId() ?></td>
    </tr>
    <tr>
      <th>Empleado:</th>
      <td><?php echo $reposos->getEmpleado() ?></td>
    </tr>
    <tr>
      <th>F / Inicio:</th>
      <td><?php echo date("d-m-Y ", strtotime($reposos->getFinicio())) ?></td>
    </tr>
    <tr>
      <th>Dias:</th>
      <td><?php echo $reposos->getDias() ?></td>
    </tr>
    <tr>
      <th>F / Fin:</th>
      <td><?php echo date("d-m-Y ", strtotime($reposos->getFfin())) ?></td>
    </tr>
    <tr>
      <th>Forma 1452:</th>
      <td><?php echo $reposos->getForma1452() ?></td>
    </tr>
    <tr>
      <th>Especialidad:</th>
      <td><?php echo $reposos->getEspecialidad() ?></td>
    </tr>
    <tr>
      <th>Centro Medico:</th>
      <td><?php echo $reposos->getCentros() ?></td>
    </tr>
    <tr>
      <th>F / Inicio Reposo Cont:</th>
      <td><?php echo date("d-m-Y ", strtotime($reposos->getFinireposocont())) ?></td>
    </tr>
    <tr>
      <th>Dias Reposo Cont:</th>
      <td><?php echo $reposos->getDiasrepcont() ?></td>
    </tr>
    <tr>
      <th>Observacion:</th>
      <td><?php echo $reposos->getObservacion() ?></td>
    </tr>
    <tr>
      <th>Registrado el:</th>
      <td><?php echo date("d-m-Y ", strtotime($reposos->getCreatedAt())) ?></td>
    </tr>
    <tr>
      <th>Modificado el:</th>
      <td><?php echo date("d-m-Y ", strtotime($reposos->getUpdatedAt())) ?></td>
    </tr>
  </tbody>
</table>
<hr />

<a href="<?php echo url_for('reposos/edit?id='.$reposos->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('reposos/index') ?>">Ver Reposos del Dia</a>
</div>