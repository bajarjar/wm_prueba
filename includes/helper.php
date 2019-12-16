<?php

class helper
{

    static function  hGetEstados($activo)
    {

        $arrayEstados = array( 1 => "Activo",0 => "Inactivo");

        $select = '<div class="form-group">
        <label for="sel1">Estado</label>
        <select class="form-control" id="activo" name="activo">';

        $select .= '<option value="">Selecciona Estado</option>';

        foreach ($arrayEstados as $key => $value) {
            if($key==$activo){
                $select .= '<option value="' . $key . '" selected>' . $value . '</option>';               
            }else{
                $select .= '<option value="' . $key . '">' . $value . '</option>';
            }
            
        }

        $select .= '</select>
         </div>';

        return $select;
    }

    static function  hGetCargo($id_cargo)
    {
      
        $sql="SELECT * FROM cargos";
        $conexion=conexion();

        $array_cargos=$conexion->getAll($sql);        

        $select = '<div class="form-group">
        <label for="sel1">Cargos</label>
        <select class="form-control" id="id_cargo" name="id_cargo">';

        $select .= '<option value="0">Selecciona cargo</option>';

        foreach ($array_cargos as $key => $value) {
            if($value["id"]==$id_cargo){
                $select .= '<option value="' . $value["id"] . '" selected>' . $value["nombre"] . '</option>';               
            }else{
                $select .= '<option value="' . $value["id"] . '">' . $value["nombre"] . '</option>';
            }
            
        }

        $select .= '</select>
         </div>';

        return $select;
    }

    static function  hGetEstado($id_estado)
    {
      
        $sql="SELECT * FROM estados where activo=1";
        $conexion=conexion();

        $array_estados=$conexion->getAll($sql);        

        $select = '<div class="form-group">
        <label for="sel1">Estado</label>
        <select class="form-control" id="id_estado" name="id_estado">';

        $select .= '<option value="0">Selecciona estado</option>';

        foreach ($array_estados as $key => $value) {
            if($value["id"]==$id_estado){
                $select .= '<option value="' . $value["id"] . '" selected>' . $value["nombre"] . '</option>';               
            }else{
                $select .= '<option value="' . $value["id"] . '">' . $value["nombre"] . '</option>';
            }
            
        }

        $select .= '</select>
         </div>';

        return $select;
    }

 




}
