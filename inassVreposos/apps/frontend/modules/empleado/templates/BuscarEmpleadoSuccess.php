
 <div id="content" title="Buscar Empleado">

    <form method="post" action="<?php echo url_for('empleado/mostrar')?>">
<fieldset>
<label for="ci_empleado">Cedula del Empleado</label>
<input type="text" name="ci_empleado" id="ci_empleado" />
<br>
<br>
<input type="submit" value="Buscar" />
</fieldset>
</form>
</div>

    </body>
</html>
