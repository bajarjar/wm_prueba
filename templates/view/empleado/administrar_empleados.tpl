<div class="default col-md-12">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Administrar empleados</b></center></div>
 	<div class="panel-body" width="95%">
 		<table id="tbl_empleados" class="table table-striped table-bordered" cellspacing="0" width="100%">
 			<thead>
				<th>ID</th>
				<th>CODIGO</th>
				<th>NOMBRE</th>
				<th>LUGAR N</th> 
				<th>FECHA</th> 
				<th>DIRECCIÓN</th> 	
				<th>TELEFONO</th> 	
				<th>CARGO</th> 	
				<th>ESTADO</th> 	
				  				
 			</thead>
			{foreach from=$array_empleados item=tbl_empleados}
	 			<TR>
					<td>{$tbl_empleados.id}</td>
					<td>{$tbl_empleados.codigo}</td>
					<td>{$tbl_empleados.nombre}</td>
					<td>{$tbl_empleados.lugar_nacimiento}</td>
					<td>{$tbl_empleados.fecha_nacimiento}</td>
					<td>{$tbl_empleados.direccion}</td>
					<td>{$tbl_empleados.telefono}</td>
					<td>{$tbl_empleados.cargo}</td>
					<td>{$tbl_empleados.estado}</td>
	 				
	 				<td>
	 					<a href="index.php?acc=editar_empleado&id={$tbl_empleados.id}" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span> Editar</a>
	 					<a href="index.php?acc=eliminar_empleado&id={$tbl_empleados.id}" class="btn btn-danger"> <span class="glyphicon glyphicon-trash"></span> Eliminar</a>	
	 				</td>
	 			</TR>
			{/foreach}
 		</table>
 	</div>
 </div>
</div>

<script type="text/javascript">
$(document).ready(function(){ $("#tbl_empleados").DataTable(); });
</script>