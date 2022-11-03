<?php
include("./././src/secciones/items_menu.php");

$menu = "";


for($i = 0; $i< count($listaMenus);$i++){

  $menu = $menu."<li><a class='enlace' href='".$listaEnlaces[$i]."'>".$listaMenus[$i]."</a></li>";
}

$menu = "<nav class='navegacion'><div class='logo'>TS</div><ul class='menu'>".$menu."</ul><div class='icono'>ICONO</div></nav>";


echo $menu;


?>
