<?php 
$sql="select e.* ,c.nombre as cargo,es.nombre as estado
from empleados e
inner join cargos c on (c.id=e.id_cargo)
inner join estados es on (es.id=e.id_estado)";
$array_empleados=$conexion->getAll($sql);



$smarty->assign("array_empleados",$array_empleados);
$smarty->display("view/empleado/administrar_empleados.tpl");
 ?>