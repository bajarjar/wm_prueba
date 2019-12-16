<div class="default col-md-9">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Reporte de usuarios asta la fecha {$smarty.now|date_format} </b></center></div>
 	<div class="panel-body" width="95%">
 		<table id="tbl_usuario" class="table table-striped table-bordered" cellspacing="0" width="100%">
 			<thead>
 				<th>ID</th>
 				<th>NOMBRE COMPLETO</th>
 				<th>USUARIO</th>
 			</thead>
			{foreach from=$array_usuarios item=tbl_usuario}
	 			<TR>
	 				<td>{$tbl_usuario.id_usuario}</td>
	 				<td>{$tbl_usuario.nombre_completo}</td>
	 				<td>{$tbl_usuario.usuario}</td>
	 			</TR>
			{/foreach}
 		</table>
 		<div>
			<center>
				<a href="index.php" class="btn btn-danger para_imprimir">Cancelar</a>
				<button class="btn btn-primary para_imprimir" onclick="imprimir_reporte()">Imprimir reporte</button>
			</center>
 		</div>
 	</div>
 </div>
</div>

<script type="text/javascript">
$(document).ready(function(){ $("#tbl_usuario").DataTable(); });
</script>

<script type="text/javascript">
function imprimir_reporte()
{
    $(".para_imprimir").hide();
	window.print();
	$(".para_imprimir").show();
}

</script>