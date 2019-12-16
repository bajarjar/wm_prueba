
<script type="text/javascript" src="templates/js/jscuston/cargo.js"></script>

<div class="default col-md-12">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Cargo</b></center></div>
 	<div class="panel-body" width="95%">
 		<form name="agregar_cargo" id="agregar_cargo" class="formulario" method="post">
 			{$alerta} 

			 <input type="hidden" class="form-control" id="id" name="id" value="{$id}">		

			<div class="form-group">
			<label for="usr">Nombre:</label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="{$nombre}">
			</div>

			<div class="form-group">
			<label for="usr">Area:</label>
			<input type="text" class="form-control" id="area" name="area" value="{$area}">
			</div>

 			<center>
             <input type="submit" name="btn_guardar" value="Guardar area" class="btn btn-primary">
             <a href="index.php" class="btn btn-danger">Cancelar registro</a>
 			</center>

 		</form>
 	</div>
 </div>
</div>