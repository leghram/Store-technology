<?php
include("./src/componentes/componente.php");
$objComponente = new Componente();

include("./src/secciones/header.php");

?>

<body>

<?php

include("./src/secciones/menu.php")

?>
  <h1>TIENDA DE COMPONENTES TECNOLOGICOS</h1>



  <div class='general'>

  <?php

$lista = [
  ["producto 1","23,23","https://www.altonivel.com.mx/wp-content/uploads/2020/05/amazon1.jpg"],
  ["producto 2","23,23","https://www.altonivel.com.mx/wp-content/uploads/2020/05/amazon1.jpg"],
  ["producto 3","23,23","https://www.altonivel.com.mx/wp-content/uploads/2020/05/amazon1.jpg"],
  ["producto 4","23,23","https://www.altonivel.com.mx/wp-content/uploads/2020/05/amazon1.jpg"],
  ["producto 5","23,23","https://www.altonivel.com.mx/wp-content/uploads/2020/05/amazon1.jpg"],
  ["producto 6","23,23","https://www.rentadvisor.com.co/wp-content/uploads/images-2.jpg"],
  ["producto 7","23,23","https://www.rentadvisor.com.co/wp-content/uploads/images-2.jpg"],
  ["producto 8","23,23","https://www.altonivel.com.mx/wp-content/uploads/2020/05/amazon1.jpg"],
  ["producto 9","23,23","https://www.altonivel.com.mx/wp-content/uploads/2020/05/amazon1.jpg"],
  ["producto 10","23,23","https://www.altonivel.com.mx/wp-content/uploads/2020/05/amazon1.jpg"],
  ["producto 11","23,23","https://www.altonivel.com.mx/wp-content/uploads/2020/05/amazon1.jpg"],
];

  for($i=0; $i<count($lista);$i++){
    echo $objComponente->get_box_1_short($lista[$i][0],$lista[$i][1],$lista[$i][2]);
  }

  ?>
</div>


</body>
</html>