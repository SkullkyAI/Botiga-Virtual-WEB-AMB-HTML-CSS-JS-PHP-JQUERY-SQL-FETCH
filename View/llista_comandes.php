<html lang="ca">
<head>
<title>Lista de pedidos</title>
</head>
<body>
<header>
	 	<?php require __DIR__.'/menu_superior.php'; ?>
</header>

<ul class="comandes-container">
<?php if (isset($comandes) && !empty($comandes)) {
foreach ($comandes as $comanda): ?>
    <li class="comanda" id=<?php echo $comanda['id_comanda']?>>
        <h2>Comanda ID: <?php echo $comanda['id_comanda'] ?></h2>
        <h3>Realizada a las: <span><?php echo $comanda['hora'] ?></span></h3>
        <?php if (isset($productes[$comanda['id_comanda']]) && is_array($productes[$comanda['id_comanda']])): ?>
            <?php foreach ($productes[$comanda['id_comanda']] as $producte): ?>
                <div class="comanda-producto">
                    <div class="comanda-info">
                        <a href="resource_detalle.php?id_producte=<?php echo $producte[0]['ID'] ?>">
                            <img src="<?php echo $producte[0]['Imagen'] ?>" alt="<?php echo $producte['Nombre'] ?>">
                        </a>
                        <div class="product-details">
                            <h4>Producto: <?php echo $producte[0]['Nombre'] ?></h4>
                            <p>Cantidad: <?php echo $productes_comanda[$comanda['id_comanda']][$producte[0]['ID']]['quantitat']. ' unidades' ?> </p>
                            <p>Precio: <?php echo $productes_comanda[$comanda['id_comanda']][$producte[0]['ID']]['preu']. ' €' ?> </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="comanda-total">
                <p>Cantidad total: <?php echo $comanda['quantitat_total'] ?> unidades</p>
                <p>Total de la comanda: <?php echo $comanda['preu_total'] ?> €</p>
            </div>
        <?php endif; ?>
    </li>
<?php endforeach; } else {
    echo '<h1>No hay pedidos</h1>';
    echo '<meta http-equiv="refresh" content="3;url=https://tdiw-j4.deic-docencia.uab.cat/index.php" />';
}
?>
</ul>


</body>
</html>
