<?php 

$nombre="";
$area="";
$id="";

$alerta="";

if(isset($_GET["id"])){

	$sql = "select * from cargos where id=".$_GET["id"];
	$array = $conexion->getAll($sql);

	$id=$_GET["id"];
	$nombre=$array[0]["nombre"];
	$area=$array[0]["area"];

}

if ($_POST)
{

	$nombre=$_POST["nombre"];
	$area=$_POST["area"];
	$id=$_POST["id"];

	try {

		$table  = 'cargos';

		$record = array();
		$record["nombre"] = $nombre;
		$record["area"]  = $area; 

		if($id==""){		

			$conexion->autoExecute($table,$record,'INSERT');

			if($conexion->ErrorMsg()){
				throw new Exception('Error');
			}

		}else{

			$conexion->autoExecute($table,$record,'UPDATE','id='.$_GET["id"].'');

			if($conexion->ErrorMsg()){
				throw new Exception($conexion->ErrorMsg());
			}
		}

		$alerta="<div class='alert alert-success' role='alert'><span class='glyphicon glyphicon-ok'></span>Procedimiento exitoso.</div>";

	
	} catch (\Exception $e) {

		echo $e->getMessage();

		$alerta="<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign'></span>Ocurrió un error por favor comunícate con el administrador.</div>";
	
	}

}
	$smarty->assign("alerta",$alerta);
	$smarty->assign("id",$id);
	$smarty->assign("nombre",$nombre);
	$smarty->assign("area",$area);
	

	
	$smarty->display("view/cargo/registrar_cargo.tpl");
