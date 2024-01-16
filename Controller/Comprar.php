<?php
session_start();
require_once __DIR__.'/../Model/connectaDB.php';
require_once __DIR__.'/../Model/Comprar.php';

if($_SESSION['count'] > 0){

    $user = $_SESSION['user_id'];
    $precios = $_SESSION['precios'];
    $valor = $_SESSION['valor'];
    $total = $_SESSION['count'];
    $hora = date("Y-m-d H:i:s");

    $connexio = connectaDB();
    $id_comanda = comprar_Comanda($hora, $user, $valor, $total, $connexio);
    if (!$id_comanda) {
        echo "Error al comprar";
        header("refresh:3;url=https://tdiw-j4.deic-docencia.uab.cat/index.php?action=carrito");
    }

    foreach ($_SESSION['cart'] as $id_producte => $quantitat) {
        $preu = $precios[$id_producte];
        $comprar = comprar_producto_comanda($id_producte, $quantitat, $preu, $id_comanda, $connexio);
        if (!$comprar) {
            echo "Error al comprar";
            header("refresh:3;url=https://tdiw-j4.deic-docencia.uab.cat/index.php?action=carrito");
        }
    }

    $_SESSION['cart'] = array();
    $_SESSION['precios'] = array();
    $_SESSION['valor'] = 0;
    $_SESSION['count'] = 0;
}
require __DIR__.'/../View/compra.php';
?>