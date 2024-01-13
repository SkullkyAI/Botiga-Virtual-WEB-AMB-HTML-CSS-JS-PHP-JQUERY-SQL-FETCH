<?php
function login($email, $password, $connexio) {

    $query = 'SELECT "Contraseña" FROM usuari WHERE "Email" = $1';
    $result = pg_query_params($connexio, $query, array($email));

    if ($result && pg_num_rows($result) > 0) {
        $hashedPassword = pg_fetch_result($result, 0, 0);

        if (password_verify($password, $hashedPassword)) {

            return true;
        }
    }


    return false;
}

function getUsuari($email, $connexio) {

    $query = 'SELECT * FROM usuari WHERE "Email" = $1';
    $result = pg_query_params($connexio, $query, array($email));

    if ($result && pg_num_rows($result) > 0) {
        $usuari = pg_fetch_assoc($result);
        return $usuari;
    }

    return false;
}


?>