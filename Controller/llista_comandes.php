<?php

require_once __DIR__.'/../Model/connectaDB.php';
require_once __DIR__.'/../Model/llista_comandes.php';
require_once __DIR__.'/../Model/detalleProd.php';

session_start();
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}

$connexio = connectaDB();
$comandes = getComandesUsuari($connexio, $user_id); 
if($comandes) {
    $productes_comanda = array();
    $productes = array();
    foreach ($comandes as $comanda) {
        $id_comanda = $comanda['id_comanda'];
        $productes_comanda[$id_comanda] = getProductesComanda($connexio, $id_comanda);
        foreach ($productes_comanda[$id_comanda] as $product) {
            $productId = $product['id_producte'];
            $productes_comanda[$id_comanda][$productId] = $product;
            $producte = DetallProducte($connexio, $productId);
            $productes[$id_comanda][] = $producte;
            }
        }
}

require __DIR__.'/../View/llista_comandes.php';

?>