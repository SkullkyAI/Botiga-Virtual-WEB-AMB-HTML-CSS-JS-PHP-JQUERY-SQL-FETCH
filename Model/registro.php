<?php
function registro($Nombre, $mail, $key, $addr, $tel, $cpostal, $city, $connexio) {

    $hashedKey = password_hash($key, PASSWORD_DEFAULT);

    $query = 'INSERT INTO usuari ("Nombre", "Email", "Contraseña", "Dirección", "Teléfono", "Código postal", "Poblacion") VALUES ($1, $2, $3, $4, $5, $6, $7)';

    $result = pg_query_params($connexio, $query, array($Nombre, $mail, $hashedKey, $addr, $tel, $cpostal, $city));

    return $result != false;
}
?>