<?php
function getUsuari($connexio, $id_usuari)
{
    $sql_producto = "SELECT * FROM usuari WHERE usuari.\"ID\" = $1";
    $params = array($id_usuari);
    $resultat_sql = pg_query_params($connexio, $sql_producto, $params) or die("Error sql usuari");
    $resultat_usuari = pg_fetch_all($resultat_sql);

    return $resultat_usuari;
}

function getUsuariImg($connexio, $id_usuari)
{
    $sql_producto = "SELECT img FROM usuari WHERE usuari.\"ID\" = $1";
    $params = array($id_usuari);
    $resultat_sql = pg_query_params($connexio, $sql_producto, $params) or die("Error sql usuari img");
    $resultat_usuari = pg_fetch_all($resultat_sql);

    return $resultat_usuari;
}

?>