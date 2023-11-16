<?php
function getCategories($connexio)
{
    $sql_categorias = "SELECT * FROM categorias";
    $consulta_categorias =  pg_query($connexio,$sql_categorias) or die("Error sql categorias");
    $resultat_categories = pg_fetch_all($consulta_categorias);

    return $resultat_categories;
}
?>