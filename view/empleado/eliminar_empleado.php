<?php 

$opc="";
if(isset($_GET["opc"])){
	$opc=$_GET["opc"];
}

if ($_GET["id"]!="" && $opc=="del")
{
	$id_empleado=$_GET["id"];
	$sql="DELETE FROM empleados WHERE id =".$id_empleado.'';
	$result_delete=$conexion->execute($sql);

	if ($result_delete)
	{
		echo "<script>alert('Empleado  fue eliminado con exito'); location.replace('index.php?acc=administrar_empleados');</script>";
	}
	else
	{
		echo "<script>alert('Lamentablemente no fue posible eliminar el empleado. Por favor intenta mas tarde o contacta con el administrador :( '); location.replace('index.php?acc=administrar_empleados');</script>";
	}
}
else
{
	$id_empleado=$_GET["id"];

	$sql="select *
	from empleados e where id=".$id_empleado."
	";
	$array_empleados=$conexion->getRow($sql);

	$nombre_completo=$array_empleados["nombre"]."(".$array_empleados["codigo"].")";

	$smarty->assign("id", $id_empleado);
	$smarty->assign("nombre_completo", $nombre_completo);
}
$smarty->display("view/empleado/eliminar_empleado.tpl");
 ?>