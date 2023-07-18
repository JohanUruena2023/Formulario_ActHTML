<?php
  $producto1 = $_POST['producto1'];
  $precio1 = $_POST['precio1'];
  $producto2 = $_POST['producto2'];
  $precio2 = $_POST['precio2'];
  $total = $precio1 + $precio2;
  echo "Producto 1: ".$producto1;
echo"<br>";
  echo "El valor del producto es: ".$precio1;
echo"<br>";
  echo "Producto 2: ".$producto2;
echo"<br>";
  echo "El valor del producto es:".$precio2;
  echo"<br>";
  echo "<p>Total a pagar: </p> .$total;
  ?>

