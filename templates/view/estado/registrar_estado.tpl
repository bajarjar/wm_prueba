
<script type="text/javascript" src="templates/js/jscuston/estado.js"></script>

<div class="default col-md-12">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Estado</b></center></div>
 	<div class="panel-body" width="95%">
 		<form name="agregar_estado" id="agregar_estado" class="formulario" method="post">
 			{$alerta} 

			 <input type="hidden" class="form-control" id="id" name="id" value="{$id}">		

			<div class="form-group">
			<label for="usr">Nombre:</label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="{$nombre}">
			</div>


			 {$activo}

 			<center>
             <input type="submit" name="btn_guardar" value="Guardar estado" class="btn btn-primary">
             <a href="index.php" class="btn btn-danger">Cancelar registro</a>
 			</center>

 		</form>
 	</div>
 </div>
</div>