<?php
function getComandesUsuari($connexio, $id_usuari)
{
    $sql_producto = "SELECT * FROM llista_comandes WHERE llista_comandes.\"id_usuari\" = $1";
    $params = array($id_usuari);
    $resultat_sql = pg_query_params($connexio, $sql_producto, $params) or die("Error sql comanda");
    $resultat_comanda = pg_fetch_all($resultat_sql);

    return $resultat_comanda;
}

function getProductesComanda($connexio, $id_comanda)
{
    $sql_producto = "SELECT * FROM detall_comanda WHERE detall_comanda.\"id_comanda\" = $1";
    $params = array($id_comanda);
    $resultat_sql = pg_query_params($connexio, $sql_producto, $params) or die("Error sql comanda");
    $resultat_comanda = pg_fetch_all($resultat_sql);

    return $resultat_comanda;
}

?>