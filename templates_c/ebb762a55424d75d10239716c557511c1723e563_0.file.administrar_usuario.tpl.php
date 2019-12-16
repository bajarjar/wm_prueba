<?php
/* Smarty version 3.1.29, created on 2019-12-15 21:20:43
  from "C:\laragon\www\wm_template\templates\administrar_usuario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5df6a3ab2d4be9_73868512',
  'file_dependency' => 
  array (
    'ebb762a55424d75d10239716c557511c1723e563' => 
    array (
      0 => 'C:\\laragon\\www\\wm_template\\templates\\administrar_usuario.tpl',
      1 => 1576444840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df6a3ab2d4be9_73868512 ($_smarty_tpl) {
?>
<div class="default col-md-12">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Administrar usuario</b></center></div>
 	<div class="panel-body" width="95%">
 		<table id="tbl_usuario" class="table table-striped table-bordered" cellspacing="0" width="100%">
 			<thead>
 				<th>ID</th>
 				<th>NOMBRE COMPLETO</th>
 				<th>USUARIO</th>
 				<th>OPCIONES</th>
 			</thead>
			<?php
$_from = $_smarty_tpl->tpl_vars['array_usuarios']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tbl_usuario_0_saved_item = isset($_smarty_tpl->tpl_vars['tbl_usuario']) ? $_smarty_tpl->tpl_vars['tbl_usuario'] : false;
$_smarty_tpl->tpl_vars['tbl_usuario'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tbl_usuario']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tbl_usuario']->value) {
$_smarty_tpl->tpl_vars['tbl_usuario']->_loop = true;
$__foreach_tbl_usuario_0_saved_local_item = $_smarty_tpl->tpl_vars['tbl_usuario'];
?>
	 			<TR>
	 				<td><?php echo $_smarty_tpl->tpl_vars['tbl_usuario']->value['id_usuario'];?>
</td>
	 				<td><?php echo $_smarty_tpl->tpl_vars['tbl_usuario']->value['nombre_completo'];?>
</td>
	 				<td><?php echo $_smarty_tpl->tpl_vars['tbl_usuario']->value['usuario'];?>
</td>
	 				<td>
	 					<a href="index.php?acc=editar_usuario&id=<?php echo $_smarty_tpl->tpl_vars['tbl_usuario']->value['id_usuario'];?>
" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span> Editar</a>
	 					<a href="index.php?acc=eliminar_usuario&id=<?php echo $_smarty_tpl->tpl_vars['tbl_usuario']->value['id_usuario'];?>
" class="btn btn-danger"> <span class="glyphicon glyphicon-trash"></span> Eliminar</a>
	 				</td>
	 			</TR>
			<?php
$_smarty_tpl->tpl_vars['tbl_usuario'] = $__foreach_tbl_usuario_0_saved_local_item;
}
if ($__foreach_tbl_usuario_0_saved_item) {
$_smarty_tpl->tpl_vars['tbl_usuario'] = $__foreach_tbl_usuario_0_saved_item;
}
?>
 		</table>
 	</div>
 </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){ $("#tbl_usuario").DataTable(); });
<?php echo '</script'; ?>
><?php }
}
