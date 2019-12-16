<?php
/* Smarty version 3.1.29, created on 2019-12-16 18:44:15
  from "C:\laragon\www\wm_template\templates\view\empleado\administrar_empleados.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5df7d07fcf1806_16843056',
  'file_dependency' => 
  array (
    '119de498c62bc789d593a3ee3d19a50c700ff048' => 
    array (
      0 => 'C:\\laragon\\www\\wm_template\\templates\\view\\empleado\\administrar_empleados.tpl',
      1 => 1576521850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df7d07fcf1806_16843056 ($_smarty_tpl) {
?>
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
			<?php
$_from = $_smarty_tpl->tpl_vars['array_empleados']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tbl_empleados_0_saved_item = isset($_smarty_tpl->tpl_vars['tbl_empleados']) ? $_smarty_tpl->tpl_vars['tbl_empleados'] : false;
$_smarty_tpl->tpl_vars['tbl_empleados'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tbl_empleados']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tbl_empleados']->value) {
$_smarty_tpl->tpl_vars['tbl_empleados']->_loop = true;
$__foreach_tbl_empleados_0_saved_local_item = $_smarty_tpl->tpl_vars['tbl_empleados'];
?>
	 			<TR>
					<td><?php echo $_smarty_tpl->tpl_vars['tbl_empleados']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['tbl_empleados']->value['codigo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['tbl_empleados']->value['nombre'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['tbl_empleados']->value['lugar_nacimiento'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['tbl_empleados']->value['fecha_nacimiento'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['tbl_empleados']->value['direccion'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['tbl_empleados']->value['telefono'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['tbl_empleados']->value['cargo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['tbl_empleados']->value['estado'];?>
</td>
	 				
	 				<td>
	 					<a href="index.php?acc=editar_empleado&id=<?php echo $_smarty_tpl->tpl_vars['tbl_empleados']->value['id'];?>
" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span> Editar</a>
	 					<a href="index.php?acc=eliminar_empleado&id=<?php echo $_smarty_tpl->tpl_vars['tbl_empleados']->value['id'];?>
" class="btn btn-danger"> <span class="glyphicon glyphicon-trash"></span> Eliminar</a>	
	 				</td>
	 			</TR>
			<?php
$_smarty_tpl->tpl_vars['tbl_empleados'] = $__foreach_tbl_empleados_0_saved_local_item;
}
if ($__foreach_tbl_empleados_0_saved_item) {
$_smarty_tpl->tpl_vars['tbl_empleados'] = $__foreach_tbl_empleados_0_saved_item;
}
?>
 		</table>
 	</div>
 </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){ $("#tbl_empleados").DataTable(); });
<?php echo '</script'; ?>
><?php }
}
