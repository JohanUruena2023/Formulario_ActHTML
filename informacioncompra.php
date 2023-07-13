<html>
<head>
  <title>Procesar Formulario</title>
</head>
<body>
  <h2>Información de la Compra</h2>
  
  <?php
  // Obtener los datos del formulario
  $producto1 = $_POST['producto1'];
  $precio1 = $_POST['precio1'];
  $producto2 = $_POST['producto2'];
  $precio2 = $_POST['precio2'];

  // Calcular el total a pagar
  $total = $precio1 + $precio2;

  // Mostrar la información de la compra
  echo "<p>Producto 1: $producto1</p>";
  echo "<p>Precio 1: $precio1</p>";
  echo "<p>Producto 2: $producto2</p>";
  echo "<p>Precio 2: $precio2</p>";
  echo "<p>Total a pagar: $total</p>";
  ?>
</body>
</html>
