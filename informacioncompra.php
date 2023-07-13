<?php
  $producto1 = $_POST['producto1'];
  $precio1 = $_POST['precio1'];
  $producto2 = $_POST['producto2'];
  $precio2 = $_POST['precio2'];
  $total = $precio1 + $precio2;
  echo "<p>Producto 1: $producto1</p>";
  echo "<p>Precio 1: $precio1</p>";
  echo "<p>Producto 2: $producto2</p>";
  echo "<p>Precio 2: $precio2</p>";
  echo "<p>Total a pagar: $total</p>";
  ?>

