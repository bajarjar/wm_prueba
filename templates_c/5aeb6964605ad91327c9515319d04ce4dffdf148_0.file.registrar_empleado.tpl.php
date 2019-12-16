<?php
/* Smarty version 3.1.29, created on 2019-12-16 23:03:29
  from "C:\laragon\www\wm_template\templates\view\empleado\registrar_empleado.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5df80d41ebce22_76566718',
  'file_dependency' => 
  array (
    '5aeb6964605ad91327c9515319d04ce4dffdf148' => 
    array (
      0 => 'C:\\laragon\\www\\wm_template\\templates\\view\\empleado\\registrar_empleado.tpl',
      1 => 1576521736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df80d41ebce22_76566718 ($_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript" src="templates/js/jscuston/empleado.js"><?php echo '</script'; ?>
>

<div class="default col-md-12">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Empleado</b></center></div>
 	<div class="panel-body" width="95%">
 		<form name="agregar_empleado" id="agregar_empleado" class="formulario" method="post">
 			<?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>
 

			 <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">		

			<div class="form-group">
			<label for="usr">Codigo:</label>
			<input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $_smarty_tpl->tpl_vars['codigo']->value;?>
">
			</div>

			<div class="form-group">
			<label for="usr">Nombre:</label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
			</div>

			<div class="form-group">
			<label for="usr">Lugar nacimiento:</label>
			<input type="text" class="form-control" id="lugar_nacimiento" name="lugar_nacimiento" value="<?php echo $_smarty_tpl->tpl_vars['lugar_nacimiento']->value;?>
">
			</div>

			<div class="form-group">
			<label for="usr">Fecha nacimiento:</label>
			<input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $_smarty_tpl->tpl_vars['fecha_nacimiento']->value;?>
" readonly>
			</div>

			<div class="form-group">
			<label for="usr">Direccion:</label>
			<input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['direccion']->value;?>
">
			</div>

			<div class="form-group">
			<label for="usr">Telefono:</label>
			<input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>
">
			</div>

			<?php echo $_smarty_tpl->tpl_vars['id_cargo']->value;?>


			<?php echo $_smarty_tpl->tpl_vars['id_estado']->value;?>


			

 			<center>
             <input type="submit" name="btn_guardar" value="Guardar empleado" class="btn btn-primary">
             <a href="index.php" class="btn btn-danger">Cancelar registro</a>
 			</center>

 		</form>
 	</div>
 </div>
</div><?php }
}
