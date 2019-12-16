<?php
/* Smarty version 3.1.29, created on 2019-12-16 16:16:18
  from "C:\laragon\www\wm_template\templates\view\cargo\registrar_cargo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5df7add2d33ff5_67647960',
  'file_dependency' => 
  array (
    'e8ed75c86f108fea7d8dbc2647ebb90221d7ac7a' => 
    array (
      0 => 'C:\\laragon\\www\\wm_template\\templates\\view\\cargo\\registrar_cargo.tpl',
      1 => 1576512973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df7add2d33ff5_67647960 ($_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript" src="templates/js/jscuston/cargo.js"><?php echo '</script'; ?>
>

<div class="default col-md-12">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Cargo</b></center></div>
 	<div class="panel-body" width="95%">
 		<form name="agregar_cargo" id="agregar_cargo" class="formulario" method="post">
 			<?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>
 

			 <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">		

			<div class="form-group">
			<label for="usr">Nombre:</label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
			</div>

			<div class="form-group">
			<label for="usr">Area:</label>
			<input type="text" class="form-control" id="area" name="area" value="<?php echo $_smarty_tpl->tpl_vars['area']->value;?>
">
			</div>

 			<center>
             <input type="submit" name="btn_guardar" value="Guardar area" class="btn btn-primary">
             <a href="index.php" class="btn btn-danger">Cancelar registro</a>
 			</center>

 		</form>
 	</div>
 </div>
</div><?php }
}
