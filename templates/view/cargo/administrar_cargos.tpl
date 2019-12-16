<div class="default col-md-12">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Administrar cargo</b></center></div>
 	<div class="panel-body" width="95%">
 		<table id="tbl_cargo" class="table table-striped table-bordered" cellspacing="0" width="100%">
 			<thead>
 				<th>ID</th>
 				<th>NOMBRE</th>
 				<th>AREA</th> 
				 <th>ACCIONES</th> 				
 			</thead>
			{foreach from=$array_cargos item=tbl_cargo}
	 			<TR>
				    <td>{$tbl_cargo.id}</td>
	 				<td>{$tbl_cargo.nombre}</td>
	 				<td>{$tbl_cargo.area}</td>
	 				
	 				<td>
	 					<a href="index.php?acc=editar_cargo&id={$tbl_cargo.id}" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span> Editar</a>
	 					
	 				</td>
	 			</TR>
			{/foreach}
 		</table>
 	</div>
 </div>
</div>

<script type="text/javascript">
$(document).ready(function(){ $("#tbl_cargo").DataTable(); });
</script>