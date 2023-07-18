<?php
  $producto1 = $_POST['producto1'];
  $precio1 = $_POST['precio1'];
  $producto2 = $_POST['producto2'];
  $precio2 = $_POST['precio2'];
  $total = $precio1 + $precio2;
  echo "<p>Producto 1:</p>.$producto1;
  echo "El valor del producto es: ".$precio1;
  echo "<p>Producto 2: </p>.$precio2;
  echo "El valor del producto es:".$precio2;
  echo "<p>Total a pagar: </p> .$total;
  ?>

