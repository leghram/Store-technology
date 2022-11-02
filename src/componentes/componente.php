<?php

class Componente{

  private $box_1_short="box_1_short";
  private $box_2_cel_big="box_2_cel_big";
  private $box_3_item = "box_3_item";
  private $box_4_best_box = "box_4_best_box";

  function get_box_1_short($nombre, $precio, $ruta_imagen){
    $this->box_1_short="box_1_short";
    $caja_imagen = "<div class='box_img_box_1_short'><img class='img_box_1_short' src=".$ruta_imagen." alt='".$nombre."'></div>";
    $caja_data = "<div class='info_box_1_short'><h3>".$nombre."</h3><h3>".$precio."</h3></div>";
    $this->box_1_short = "<div class='".$this->box_1_short."'>".$caja_imagen.$caja_data."</div>";
    return $this->box_1_short;
  }

  function get_box_2_cel_big($marca, $nombre, $precio, $ruta_imagen){
    $this->box_2_cel_big="box_2_cel_big";
    $style_background = "background-image:url('".$ruta_imagen."')";
    $caja_data = "<div class='info_box_2_cel_big'><h3 class= 'box_2_marca'>".$marca."</h3><h3 class='box_2_nombre'>".$nombre."</h3><h3 class= 'box_2_price'>".$precio."</h3></div>";
    $this->box_2_cel_big = "<div style =".$style_background."  class='".$this->box_2_cel_big."'>".$caja_data."</div><div></div>";
    return $this->box_2_cel_big;
  }

  function get_box_3_item($lista_etiquetas, $nombre, $precio, $ruta_imagen){
    $this->box_3_item="box_3_item";
    $etiquetas= "<div class='box_3_etiquetas'>";
    for($i =0 ; $i < count($lista_etiquetas); $i++){
      $etiquetas= $etiquetas."<p class='box_3_etiqueta_hijo'>".$lista_etiquetas[$i]."</p>";
    }
    
    $etiquetas = $etiquetas."</div>";
    $titulo="<h3 class='box_3_title'>".$nombre."</h3>";
    $imagen = "<div class='box_3_img_container'><img class='img_box_3' src=".$ruta_imagen." alt='".$nombre."'></div>";
    $price="<h3 class='box_3_precio'>".$precio."</h3>";
    $boton="<div><div class='box_3_boton'>AGREGAR</div></div>";
    $this->box_3_item = "<div class='".$this->box_3_item."'>".$etiquetas.$titulo.$imagen.$price.$boton."</div>";
    return $this->box_3_item;
  }

  function get_box_4_best_box($dato_fecha, $nombre, $descripcion, $ruta_imagen){
    $this->box_4_best_box = "box_4_best_box";
    $style_background = "background-image:url('".$ruta_imagen."')";

    $cabecera = "<div class='box_4_dato'>".$dato_fecha."</div>";
    $titulo = "<div><h3 class='box_4_titulo'>".$nombre."</h3></div>";
    $des = "<div><p class='box_4_descripcion'>".$descripcion."</p></div>";
    $boton = "<div><div class='box_4_boton'>Comprar Ahora</div></div>";

    $this->box_4_best_box = "<div style =".$style_background."  class='".$this->box_4_best_box."'>".$cabecera.$titulo.$des.$boton."</div><div></div>";
    return $this->box_4_best_box;
  }

}


?>