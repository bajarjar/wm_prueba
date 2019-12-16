<?php
/* Smarty version 3.1.29, created on 2019-12-16 01:40:58
  from "C:\laragon\www\wm_template\templates\view\estado\administrar_estados.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5df6e0aac0b8e5_84808994',
  'file_dependency' => 
  array (
    '76deb1976b0449f30fb37075ea50539f71d14ac0' => 
    array (
      0 => 'C:\\laragon\\www\\wm_template\\templates\\view\\estado\\administrar_estados.tpl',
      1 => 1576460061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df6e0aac0b8e5_84808994 ($_smarty_tpl) {
?>
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
			<?php
$_from = $_smarty_tpl->tpl_vars['array_estados']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tbl_estados_0_saved_item = isset($_smarty_tpl->tpl_vars['tbl_estados']) ? $_smarty_tpl->tpl_vars['tbl_estados'] : false;
$_smarty_tpl->tpl_vars['tbl_estados'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tbl_estados']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tbl_estados']->value) {
$_smarty_tpl->tpl_vars['tbl_estados']->_loop = true;
$__foreach_tbl_estados_0_saved_local_item = $_smarty_tpl->tpl_vars['tbl_estados'];
?>
	 			<TR>
				    <td><?php echo $_smarty_tpl->tpl_vars['tbl_estados']->value['id'];?>
</td>
	 				<td><?php echo $_smarty_tpl->tpl_vars['tbl_estados']->value['nombre'];?>
</td>
	 				<td><?php echo $_smarty_tpl->tpl_vars['tbl_estados']->value['activo'];?>
</td>
	 				
	 				<td>
	 					<a href="index.php?acc=editar_estado&id=<?php echo $_smarty_tpl->tpl_vars['tbl_estados']->value['id'];?>
" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span> Editar</a>
	 					
	 				</td>
	 			</TR>
			<?php
$_smarty_tpl->tpl_vars['tbl_estados'] = $__foreach_tbl_estados_0_saved_local_item;
}
if ($__foreach_tbl_estados_0_saved_item) {
$_smarty_tpl->tpl_vars['tbl_estados'] = $__foreach_tbl_estados_0_saved_item;
}
?>
 		</table>
 	</div>
 </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){ $("#tbl_estados").DataTable(); });
<?php echo '</script'; ?>
><?php }
}
