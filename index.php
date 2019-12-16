<?php
include("includes/config.ini.php");
$conexion=conexion();
include("includes/helper.php");
$acc="";
if(isset($_GET["acc"])){
	$acc=$_GET["acc"];
}


$smarty->assign("titulo",".::Inicio/".$acc."::.");
$smarty->display("header.tpl");
$smarty->display("menu.tpl");
//------------------------------
if ($acc && ($acc=="registrar_estado" || $acc=="editar_estado")) 
{
	include("view/estado/registrar_estado.php");
}
else if ($acc && $acc=="administrar_estados") 
{
	include("view/estado/administrar_estados.php");
}
else if ($acc && $acc=="eliminar_estado") 
{
	include("view/estado/eliminar_estado.php");
}

else if ($acc && ($acc=="registrar_cargo" || $acc=="editar_cargo")) 
{
	include("view/cargo/registrar_cargo.php");
}
else if ($acc && $acc=="administrar_cargos") 
{
	include("view/cargo/administrar_cargos.php");
}
else if ($acc && $acc=="eliminar_cargo") 
{
	include("view/cargo/eliminar_cargo.php");
}


else if ($acc && ($acc=="registrar_empleado" || $acc=="editar_empleado")) 
{
	include("view/empleado/registrar_empleado.php");
}
else if ($acc && $acc=="administrar_empleados") 
{
	include("view/empleado/administrar_empleados.php");
}
else if ($acc && $acc=="eliminar_empleado") 
{
	include("view/empleado/eliminar_empleado.php");
}




else
{
	?>
	<div class="default col-md-9">
	<center>
		<img src="includes/imagenes/wm.jpg" width="100%">
	</center>
	</div>
	<?php
}
//-------------------------
$smarty->display("footer.tpl");
?>