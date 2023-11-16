<?php
function DetallProducte($connexio, $id_producte)
{
    $sql_producto = "SELECT * FROM productos WHERE productos.\"ID\" = $1";
    $params = array($id_producte);
    $resultat_sql = pg_query_params($connexio, $sql_producto, $params) or die("Error sql producto");
    $resultat_producte = pg_fetch_all($resultat_sql);

    return $resultat_producte;
}

?>