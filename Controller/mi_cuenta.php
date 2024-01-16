<?php
session_start();
require_once __DIR__.'/../Model/connectaDB.php';
require_once __DIR__.'/../Model/mi_cuenta.php';

$user_id = $_SESSION['user_id'];
$connexio = connectaDB();
$usuari = getUsuari($connexio, $user_id);
require __DIR__.'/../View/mi_cuenta.php';
?>