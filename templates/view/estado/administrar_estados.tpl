<div class="default col-md-12">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Administrar estados</b></center></div>
 	<div class="panel-body" width="95%">
 		<table id="tbl_estados" class="table table-striped table-bordered" cellspacing="0" width="100%">
 			<thead>
 				<th>ID</th>
 				<th>NOMBRE</th>
 				<th>ACTIVO</th> 
				 <th>ACCIONES</th> 				
 			</thead>
			{foreach from=$array_estados item=tbl_estados}
	 			<TR>
				    <td>{$tbl_estados.id}</td>
	 				<td>{$tbl_estados.nombre}</td>
	 				<td>{$tbl_estados.activo}</td>
	 				
	 				<td>
	 					<a href="index.php?acc=editar_estado&id={$tbl_estados.id}" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span> Editar</a>
	 					
	 				</td>
	 			</TR>
			{/foreach}
 		</table>
 	</div>
 </div>
</div>

<script type="text/javascript">
$(document).ready(function(){ $("#tbl_estados").DataTable(); });
</script>