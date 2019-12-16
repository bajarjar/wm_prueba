<?php 

$nombre="";
$activo="";
$id="";

$alerta="";

if(isset($_GET["id"])){

	$sql = "select * from estados where id=".$_GET["id"];
	$array = $conexion->getAll($sql);

	$id=$_GET["id"];
	$nombre=$array[0]["nombre"];
	$activo=$array[0]["activo"];

}

if ($_POST)
{

	$nombre=$_POST["nombre"];
	$activo=$_POST["activo"];
	$id=$_POST["id"];

	try {

		$table  = 'estados';

		$record = array();
		$record["nombre"] = $nombre;
		$record["activo"]  = $activo; 

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
	$smarty->assign("activo",helper::hGetEstados($activo));
	

	
	$smarty->display("view/estado/registrar_estado.tpl");
