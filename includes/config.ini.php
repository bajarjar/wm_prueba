<?php
include("adodb5/adodb.inc.php");
include("libs/smarty.class.php");


$smarty = new smarty;

function conexion()
{

	$driver = 'mysqli';

	$conexion = newAdoConnection($driver);

	$conexion->connect("localhost", "root", "123456", "wm2");

	return $conexion;
}
