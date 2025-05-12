<?php
// controlador/ProductoControlador.php
require_once '../modelo/Producto.php';

class ProductoControlador {
    public function obtenerProducto() {
        // Creamos un producto simulado
        $producto = new Producto("Fresa Premium", 5.99);
        return $producto;
    }
}
