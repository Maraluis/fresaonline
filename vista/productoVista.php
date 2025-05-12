<?php
// vista/productoVista.php
require_once '../controlador/ProductoControlador.php';

$controlador = new ProductoControlador();
$producto = $controlador->obtenerProducto();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vista Producto</title>
</head>
<body>
    <h1>Producto Disponible</h1>
    <p><strong>Nombre:</strong> <?php echo $producto->nombre; ?></p>
    <p><strong>Precio:</strong> $<?php echo $producto->precio; ?></p>
</body>
</html>
