<div class="default col-md-12">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Eliminar empleado</b></center></div>
 	<div class="panel-body" width="95%">
		<div class="alert alert-danger" role="alert">
		<h3>
		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		<span class="sr-only">Error:</span>
		Estas seguro que quieres eliminar el empleado <b>{$nombre_completo}? </b>
		</h3>
		<hr>
		Al eliminar este empleado perdera todos los privilegios y sera eliminado de la base de datos, perdiendo toda informacion sobre el. 
		Te recordamos que puedes editar la informacion de este empleado en el menu de administrar empleados.
		<center>
			 <a href="index.php?acc=eliminar_empleado&id={$id}&opc=del" class="btn btn-primary"><span class="glyphicon glyphicon-trash">&nbsp;</span>Eliminar de todas formas</a>
             <a href="index.php" class="btn btn-danger">Cancelar</a>
 		</center>
		</div>
 	</div>
 </div>
</div>