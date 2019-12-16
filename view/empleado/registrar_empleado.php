<?php

$id = "";
$codigo = "";
$nombre = "";
$lugar_nacimiento = "";
$fecha_nacimiento = "";
$direccion = "";
$telefono = "";
$id_cargo = "";
$id_estado = "";

$alerta = "";

if (isset($_GET["id"])) {

	$sql = "select * from empleados where id=" . $_GET["id"];
	$array = $conexion->getAll($sql);

	$id = $_GET["id"];
	$codigo = $array[0]["codigo"];
	$nombre = $array[0]["nombre"];
	$lugar_nacimiento = $array[0]["lugar_nacimiento"];
	$fecha_nacimiento = $array[0]["fecha_nacimiento"];
	$direccion = $array[0]["direccion"];
	$telefono = $array[0]["telefono"];
	$id_cargo = $array[0]["id_cargo"];
	$id_estado = $array[0]["id_estado"];
}

if ($_POST) {


	$id = $_POST["id"];
	$codigo = $_POST["codigo"];
	$nombre = $_POST["nombre"];
	$lugar_nacimiento = $_POST["lugar_nacimiento"];
	$fecha_nacimiento = $_POST["fecha_nacimiento"];
	$direccion = $_POST["direccion"];
	$telefono = $_POST["telefono"];
	$id_cargo = $_POST["id_cargo"];
	$id_estado = $_POST["id_estado"];


	try {

		$table  = 'empleados';

		$record = array();
		$record["codigo"] = $codigo;
		$record["nombre"] = $nombre;
		$record["lugar_nacimiento"] = $lugar_nacimiento;
		$record["fecha_nacimiento"] = $fecha_nacimiento;
		$record["direccion"] = $direccion;
		$record["telefono"] = $telefono;
		$record["id_cargo"] = $id_cargo;
		$record["id_estado"] = $id_estado;


		if ($id == "") {

			$sqlValidarCodigo = "select * from empleados where codigo='" . $codigo . "'";

			$resultValidarCodigo = $conexion->getAll($sqlValidarCodigo);

			if (count($resultValidarCodigo) > 0) {
				$alerta = "<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign'></span>El empleado con el código <b>" . $codigo . "</b> ya existe.
		<hr> Por favor ingresa un código diferente e intenta de nuevo</div>";
			} else {

				$conexion->autoExecute($table, $record, 'INSERT');

				if ($conexion->ErrorMsg()) {
					throw new Exception($conexion->ErrorMsg());
				}

				$alerta = "<div class='alert alert-success' role='alert'><span class='glyphicon glyphicon-ok'></span>Procedimiento exitoso.</div>";
			}
		} else {

			$sqlValidarCodigo = "select * from empleados where codigo='" . $codigo . "' and id != " . $id;

			$resultValidarCodigo = $conexion->getAll($sqlValidarCodigo);

			if (count($resultValidarCodigo) > 0) {
				$alerta = "<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign'></span>El empleado con el código <b>" . $codigo . "</b> ya existe.
		<hr> Por favor ingresa un código diferente e intenta de nuevo</div>";
			} else {

				$conexion->autoExecute($table, $record, 'UPDATE', 'id=' . $_GET["id"] . '');

				if ($conexion->ErrorMsg()) {
					throw new Exception($conexion->ErrorMsg());
				}
				$alerta = "<div class='alert alert-success' role='alert'><span class='glyphicon glyphicon-ok'></span>Procedimiento exitoso.</div>";
			}
		}
	} catch (\Exception $e) {

		echo $e->getMessage();

		$alerta = "<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign'></span>Ocurrió un error por favor comunícate con el administrador.</div>";
	}
}
$smarty->assign("alerta", $alerta);
$smarty->assign("id", $id);
$smarty->assign("codigo", $codigo);
$smarty->assign("nombre", $nombre);
$smarty->assign("lugar_nacimiento", $lugar_nacimiento);
$smarty->assign("fecha_nacimiento", $fecha_nacimiento);
$smarty->assign("direccion", $direccion);
$smarty->assign("telefono", $telefono);



$smarty->assign("id_cargo", helper::hGetCargo($id_cargo));
$smarty->assign("id_estado", helper::hGetEstado($id_estado));

$smarty->display("view/empleado/registrar_empleado.tpl");
