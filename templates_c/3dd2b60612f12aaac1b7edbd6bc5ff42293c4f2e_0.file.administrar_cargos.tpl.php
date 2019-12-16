<?php
/* Smarty version 3.1.29, created on 2019-12-16 16:16:43
  from "C:\laragon\www\wm_template\templates\view\cargo\administrar_cargos.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5df7adeb0fbb99_67697429',
  'file_dependency' => 
  array (
    '3dd2b60612f12aaac1b7edbd6bc5ff42293c4f2e' => 
    array (
      0 => 'C:\\laragon\\www\\wm_template\\templates\\view\\cargo\\administrar_cargos.tpl',
      1 => 1576512997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df7adeb0fbb99_67697429 ($_smarty_tpl) {
?>
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
			<?php
$_from = $_smarty_tpl->tpl_vars['array_cargos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tbl_cargo_0_saved_item = isset($_smarty_tpl->tpl_vars['tbl_cargo']) ? $_smarty_tpl->tpl_vars['tbl_cargo'] : false;
$_smarty_tpl->tpl_vars['tbl_cargo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tbl_cargo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tbl_cargo']->value) {
$_smarty_tpl->tpl_vars['tbl_cargo']->_loop = true;
$__foreach_tbl_cargo_0_saved_local_item = $_smarty_tpl->tpl_vars['tbl_cargo'];
?>
	 			<TR>
				    <td><?php echo $_smarty_tpl->tpl_vars['tbl_cargo']->value['id'];?>
</td>
	 				<td><?php echo $_smarty_tpl->tpl_vars['tbl_cargo']->value['nombre'];?>
</td>
	 				<td><?php echo $_smarty_tpl->tpl_vars['tbl_cargo']->value['area'];?>
</td>
	 				
	 				<td>
	 					<a href="index.php?acc=editar_cargo&id=<?php echo $_smarty_tpl->tpl_vars['tbl_cargo']->value['id'];?>
" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span> Editar</a>
	 					
	 				</td>
	 			</TR>
			<?php
$_smarty_tpl->tpl_vars['tbl_cargo'] = $__foreach_tbl_cargo_0_saved_local_item;
}
if ($__foreach_tbl_cargo_0_saved_item) {
$_smarty_tpl->tpl_vars['tbl_cargo'] = $__foreach_tbl_cargo_0_saved_item;
}
?>
 		</table>
 	</div>
 </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){ $("#tbl_cargo").DataTable(); });
<?php echo '</script'; ?>
><?php }
}
