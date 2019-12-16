<?php
/* Smarty version 3.1.29, created on 2019-12-16 02:14:04
  from "C:\laragon\www\wm_template\templates\view\estado\registrar_estado.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5df6e86cd91ae3_10818822',
  'file_dependency' => 
  array (
    '36e2114f8f5f25f033af3a7353cadf4d3a7af4bc' => 
    array (
      0 => 'C:\\laragon\\www\\wm_template\\templates\\view\\estado\\registrar_estado.tpl',
      1 => 1576461678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df6e86cd91ae3_10818822 ($_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript" src="templates/js/jscuston/estado.js"><?php echo '</script'; ?>
>

<div class="default col-md-12">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Estado</b></center></div>
 	<div class="panel-body" width="95%">
 		<form name="agregar_estado" id="agregar_estado" class="formulario" method="post">
 			<?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>
 

			 <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">		

			<div class="form-group">
			<label for="usr">Nombre:</label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
			</div>


			 <?php echo $_smarty_tpl->tpl_vars['activo']->value;?>


 			<center>
             <input type="submit" name="btn_guardar" value="Guardar estado" class="btn btn-primary">
             <a href="index.php" class="btn btn-danger">Cancelar registro</a>
 			</center>

 		</form>
 	</div>
 </div>
</div><?php }
}
