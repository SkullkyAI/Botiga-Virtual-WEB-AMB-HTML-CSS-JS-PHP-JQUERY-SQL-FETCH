<?php
require_once __DIR__.'/../Model/carrito.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $productId = $_POST['id_producte'];
        $quantity = $_POST['quantity'];
        addToCart($productId, $quantity);
        echo 'Producto añadido al carrito';
        $_SESSION['last_product_id'] = $productId;
        exit;
    }



?>