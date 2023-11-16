
<?php
function getProductes($connexio, $Categoria)
{
    $sql_producto = "SELECT * FROM productos WHERE productos.\"Categoria\" = $1";
    $params = array($Categoria);
    $resultat_sql = pg_query_params($connexio, $sql_producto, $params) or die("Error sql producto");
    $resultat_producte = pg_fetch_all($resultat_sql);

    return $resultat_producte;
}

?>