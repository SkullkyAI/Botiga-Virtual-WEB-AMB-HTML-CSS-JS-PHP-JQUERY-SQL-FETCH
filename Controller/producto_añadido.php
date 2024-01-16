<?php
require_once __DIR__.'/../Model/carrito.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id'])) {
    $productId = $_POST['id_producte'];
    $quantity = $_POST['quantity'];
    addToCart($productId, $quantity);
    echo '<h2 class="alert"> Producto añadido al carrito </h2>';
    $_SESSION['last_product_id'] = $productId;
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_SESSION['user_id'])) {
    echo '<h2 class="alert"> Inicia sesión para añadir productos al carrito </h2>';
    exit;
}?>
