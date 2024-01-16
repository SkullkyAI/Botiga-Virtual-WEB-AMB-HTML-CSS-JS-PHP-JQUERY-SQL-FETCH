<?php

require_once __DIR__.'/../Model/connectaDB.php';
require_once __DIR__.'/../Model/detalleProd.php';
require_once __DIR__.'/../Model/mi_cuenta.php';
$filesPublicPath = '/../fitxers/';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['user_id'])) {
    $connexio = connectaDB();
    $usuari = getUsuari($connexio, $_SESSION['user_id']);
    $name = $usuari[0]['Nombre'];
    if (isset($_SESSION['cart'])) {
        $valor = 0;
        $count = 0;
        foreach ($_SESSION['cart'] as $productId => $quantity) {
            if ($quantity > 0) {
                $producte = DetallProducte($connexio, $productId);
                $valor += $producte[0]['Precio'] * $quantity;
                $count += $quantity;
            }
        }
        $id_producte_last = $_SESSION['last_product_id'];
        if (isset($_SESSION['cart'][$_SESSION['last_product_id']])) {
            $cantidad = $_SESSION['cart'][$_SESSION['last_product_id']];
        } else {
            $cantidad = 0;
        }
        $last_producte = DetallProducte($connexio, $id_producte_last);
    }
    if($usuari[0]['img'] == null){
        $img = false;
    }
    else{
        $img = $filesPublicPath.$usuari[0]['img'];
    }


    require __DIR__.'/../View/footer.php';
}
?>