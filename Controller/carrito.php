<?php

require_once __DIR__.'/../Model/connectaDB.php';
require_once __DIR__.'/../Model/detalleProd.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['user_id'])) {
    $name = $_SESSION['user_name'];
    if (isset($_SESSION['cart'])) {
        $connexio = connectaDB();
        $valor = 0;
        $count = 0;      
        $productes = array();
        foreach ($_SESSION['cart'] as $productId => $quantity) {
            if ($quantity > 0) {
                $producte = DetallProducte($connexio, $productId);
                $productes[] = $producte;
                $valor += $producte[0]['Precio'] * $quantity;
                $count += $quantity;
            }
        }
    }
    require __DIR__.'/../View/carrito.php';
}
?>