<?php

require_once __DIR__.'/../Model/connectaDB.php';
require_once __DIR__.'/../Model/cercador.php';

$cerca = null;
if(isset($_POST['cerca'])) {
    $cerca = $_POST['cerca'];
}

$connexio = connectaDB();
$productes = cercaProductes($connexio, $cerca); 

require __DIR__.'/../View/cercador.php';

?>