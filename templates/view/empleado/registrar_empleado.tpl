
<script type="text/javascript" src="templates/js/jscuston/empleado.js"></script>

<div class="default col-md-12">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Empleado</b></center></div>
 	<div class="panel-body" width="95%">
 		<form name="agregar_empleado" id="agregar_empleado" class="formulario" method="post">
 			{$alerta} 

			 <input type="hidden" class="form-control" id="id" name="id" value="{$id}">		

			<div class="form-group">
			<label for="usr">Codigo:</label>
			<input type="text" class="form-control" id="codigo" name="codigo" value="{$codigo}">
			</div>

			<div class="form-group">
			<label for="usr">Nombre:</label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="{$nombre}">
			</div>

			<div class="form-group">
			<label for="usr">Lugar nacimiento:</label>
			<input type="text" class="form-control" id="lugar_nacimiento" name="lugar_nacimiento" value="{$lugar_nacimiento}">
			</div>

			<div class="form-group">
			<label for="usr">Fecha nacimiento:</label>
			<input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{$fecha_nacimiento}" readonly>
			</div>

			<div class="form-group">
			<label for="usr">Direccion:</label>
			<input type="text" class="form-control" id="direccion" name="direccion" value="{$direccion}">
			</div>

			<div class="form-group">
			<label for="usr">Telefono:</label>
			<input type="text" class="form-control" id="telefono" name="telefono" value="{$telefono}">
			</div>

			{$id_cargo}

			{$id_estado}

			

 			<center>
             <input type="submit" name="btn_guardar" value="Guardar empleado" class="btn btn-primary">
             <a href="index.php" class="btn btn-danger">Cancelar registro</a>
 			</center>

 		</form>
 	</div>
 </div>
</div>