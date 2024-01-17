<?php
function modificaUsuari($id_usuari, $nom, $email, $contrasenya, $direccio, $telefon, $codi_postal, $poblacio, $img, $connexio)
{
    $hash = password_hash($contrasenya, PASSWORD_DEFAULT);
    $sql = "UPDATE usuari SET \"Nombre\" = $2, \"Email\" = $3, \"Contraseña\" = $4, \"Dirección\" = $5, \"Teléfono\" = $6, \"Código postal\" = $7, \"Poblacion\" = $8, \"img\" = $9 WHERE usuari.\"ID\" = $1";
    $params = array($id_usuari, $nom, $email, $hash, $direccio, $telefon, $codi_postal, $poblacio, $img);
    $resultat_sql = pg_query_params($connexio, $sql, $params) or die("Error sql modifica usuari");
    return $resultat_sql != false;
}



?>