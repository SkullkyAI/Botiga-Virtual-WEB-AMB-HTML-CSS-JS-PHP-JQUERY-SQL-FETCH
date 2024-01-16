<?php   
function comprar_Comanda($hora, $id_usuari, $valor, $total, $connexio) {

    $query = 'INSERT INTO llista_comandes ("hora", "id_usuari", "preu_total", "quantitat_total") VALUES ($1, $2, $3, $4) RETURNING id_comanda';

    $result = pg_query_params($connexio, $query, array($hora, $id_usuari, $valor, $total));

    if ($result) {
        $row = pg_fetch_row($result);
        return $row[0]; // Devuelve el ID 
    } else {
        return false;
    }
}

function comprar_producto_comanda($id_producte, $quantitat, $preu, $id_comanda, $connexio) {
    
    $query = 'INSERT INTO detall_comanda ("id_producte", "quantitat", "preu", "id_comanda") VALUES ($1, $2, $3, $4)';
    
    $result = pg_query_params($connexio, $query, array($id_producte, $quantitat, $preu, $id_comanda));
    
    return $result != false;
}

?>