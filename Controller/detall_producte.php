<?php

require_once __DIR__.'/../Model/connectaDB.php';
require_once __DIR__.'/../Model/detalleProd.php';

$id_producte = $_GET['id_producte'];
$connexio = connectaDB();
$detall_producte = DetallProducte($connexio, $id_producte);

require __DIR__.'/../View/detall_producte.php';

?>