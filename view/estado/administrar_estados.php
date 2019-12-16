<?php 
$sql="SELECT * FROM estados";
$array_estados=$conexion->getAll($sql);



$smarty->assign("array_estados",$array_estados);
$smarty->display("view/estado/administrar_estados.tpl");
 ?>