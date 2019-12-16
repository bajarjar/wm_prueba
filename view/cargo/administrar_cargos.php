<?php 
$sql="SELECT * FROM cargos";
$array_cargos=$conexion->getAll($sql);



$smarty->assign("array_cargos",$array_cargos);
$smarty->display("view/cargo/administrar_cargos.tpl");
 ?>