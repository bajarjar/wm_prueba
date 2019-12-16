<?php
/* Smarty version 3.1.29, created on 2019-12-15 21:10:54
  from "C:\laragon\www\wm_template\templates\registrar_usuario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5df6a15e611252_11034328',
  'file_dependency' => 
  array (
    'fd8be7706bfdf5d175ab829d596c399d13f53cec' => 
    array (
      0 => 'C:\\laragon\\www\\wm_template\\templates\\registrar_usuario.tpl',
      1 => 1576444251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df6a15e611252_11034328 ($_smarty_tpl) {
?>
<div class="default col-md-12">
 <div class="panel panel-primary">
 	<div class="panel panel-heading"> <center> <b>Agregar usuario</b></center></div>
 	<div class="panel-body" width="95%">
 		<form name="agregar_usuario" method="post">
 			<?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

 			<div class="form-group">
 				<div class="input-group">
 					<span class="input-group-addon">Nombre Completo</span>
 					<input type="text" name="nombre_completo" id="nombre_completo" class="form-control" placeholder="Ejem: Cato phperocreator" value="<?php echo $_smarty_tpl->tpl_vars['nombre_completo']->value;?>
" required>
 				</div>
 			</div>

 			<div class="form-group">
 				<div class="input-group">
 					<span class="input-group-addon">Usuario o ID</span>
 					<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ejem: cato" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
" required>
 				</div>
 			</div>

 			<div class="form-group">
 				<div class="input-group">
 					<span class="input-group-addon">Password</span>
 					<input type="password" name="password" id="password" class="form-control" placeholder="Ejem: **********" required>
 				</div>
 			</div>

 			<div class="form-group">
 				<div class="input-group">
 					<span class="input-group-addon">Reingresa el Password</span>
 					<input type="password" name="re_password" id="re_password" class="form-control" placeholder="Ejem: **********" required>
 				</div>
 			</div>

 			<center>
             <input type="submit" name="btn_guardar" value="Guardar usuario" class="btn btn-primary">
             <a href="index.php" class="btn btn-danger">Cancelar registro</a>
 			</center>

 		</form>
 	</div>
 </div>
</div><?php }
}
