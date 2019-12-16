<?php
/* Smarty version 3.1.29, created on 2019-12-16 23:02:25
  from "C:\laragon\www\wm_template\templates\view\empleado\eliminar_empleado.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5df80d01c60589_44728885',
  'file_dependency' => 
  array (
    'e1c23a559d52eddbfea81fb9cadce0a0207d3cc0' => 
    array (
      0 => 'C:\\laragon\\www\\wm_template\\templates\\view\\empleado\\eliminar_empleado.tpl',
      1 => 1576537328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df80d01c60589_44728885 ($_smarty_tpl) {
?>
<div class="default col-md-12">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Eliminar empleado</b></center></div>
 	<div class="panel-body" width="95%">
		<div class="alert alert-danger" role="alert">
		<h3>
		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		<span class="sr-only">Error:</span>
		Estas seguro que quieres eliminar el empleado <b><?php echo $_smarty_tpl->tpl_vars['nombre_completo']->value;?>
? </b>
		</h3>
		<hr>
		Al eliminar este empleado perdera todos los privilegios y sera eliminado de la base de datos, perdiendo toda informacion sobre el. 
		Te recordamos que puedes editar la informacion de este empleado en el menu de administrar empleados.
		<center>
			 <a href="index.php?acc=eliminar_empleado&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&opc=del" class="btn btn-primary"><span class="glyphicon glyphicon-trash">&nbsp;</span>Eliminar de todas formas</a>
             <a href="index.php" class="btn btn-danger">Cancelar</a>
 		</center>
		</div>
 	</div>
 </div>
</div><?php }
}
