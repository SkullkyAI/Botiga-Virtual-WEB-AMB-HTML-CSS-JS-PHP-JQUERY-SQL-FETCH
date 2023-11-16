<?php

require_once __DIR__.'/../Model/connectaDB.php';
require_once __DIR__.'/../Model/productes.php';

$id_categoria = 1;
if(isset($_GET['id_categoria'])) {
    $id_categoria = $_GET['id_categoria'];
}

$connexio = connectaDB();
$productes = getProductes($connexio, $id_categoria); 

require __DIR__.'/../View/llistat_productes.php';

?>

