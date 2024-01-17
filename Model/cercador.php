<?php
function cercaProductes($connexio, $cerca)
{
    $sql_producto = 'SELECT * FROM productos WHERE "Nombre" LIKE $1 OR "Descripción" LIKE $2';
    $params = array("%$cerca%", "%$cerca%");
    $resultat_sql = pg_query_params($connexio, $sql_producto, $params) or die("Error sql cerca");
    $resultat_productes = pg_fetch_all($resultat_sql);

    return $resultat_productes;
}

?>