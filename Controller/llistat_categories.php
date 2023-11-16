<?php

require_once __DIR__.'/../Model/connectaDB.php';
require_once __DIR__.'/../Model/categories.php';

$connexio = connectaDB();
$categories = getCategories($connexio); 

require __DIR__.'/../View/llistat_categories.php';
?>