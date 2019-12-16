<?php
/* Smarty version 3.1.29, created on 2019-12-16 16:17:59
  from "C:\laragon\www\wm_template\templates\menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5df7ae37e36fb7_95366386',
  'file_dependency' => 
  array (
    'cd65921a5086b796bccc3cdaf09610c924085fd6' => 
    array (
      0 => 'C:\\laragon\\www\\wm_template\\templates\\menu.tpl',
      1 => 1576513071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df7ae37e36fb7_95366386 ($_smarty_tpl) {
?>

<nav class="navbar navbar-default" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Prueba</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Estados
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"></a></li>
          <li><a href="index.php?acc=registrar_estado">Agregar estado</a></li>
          <li><a href="index.php?acc=administrar_estados">Listar estado</a></li>
        </ul>
      </li>



 <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cargo
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"></a></li>
          <li><a href="index.php?acc=registrar_cargo">Agregar cargo</a></li>
          <li><a href="index.php?acc=administrar_cargos">Listar cargo</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Empleados
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"></a></li>
          <li><a href="index.php?acc=registrar_empleado">Agregar empleado</a></li>
          <li><a href="index.php?acc=administrar_empleados">Listar empleados</a></li>
        </ul>
      </li>


    
    </ul>
  </div>
</nav>


</div><?php }
}
