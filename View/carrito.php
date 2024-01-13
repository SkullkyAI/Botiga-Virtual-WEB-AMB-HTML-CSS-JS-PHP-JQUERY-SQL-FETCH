<html lang="ca">
<head>
<title>Carrito</title>
</head>
<body>
<header>
	 	<?php require __DIR__.'/../View/menu_superior.php'; ?>
</header>
<ul class="carrito-container">
<?php foreach ($productes as $producte): ?>
    <li class="producto-carrito" id=<?php echo $producte[0]['ID']?>>
        <div class="producto-info">
            <a href="resource_detalle.php?id_producte=<?php echo $producte[0]['ID'] ?>">
                <img src="<?php echo $producte[0]['Imagen'] ?>" alt="<?php echo $producte[0]['Nombre'] ?>">
            </a>
            <h3><?php echo $producte[0]['Nombre'] ?></h3>
            <p><?php echo $producte[0]['Descripción'] ?></p>
            <p><?php echo $producte[0]['Precio'] * $_SESSION['cart'][$producte[0]['ID']]. ' €' ?></p>
        </div>
        <div class="producto-control">
            <input type="number" min="1" value="<?php echo $_SESSION['cart'][$producte[0]['ID']] ?>" onchange="updateQuantity(<?php echo $producte[0]['ID'] ?>, this.value)">
            <button onclick="removeFromCart(<?php echo $producte[0]['ID'] ?>)">Eliminar</button>
        </div>
    </li>
<?php endforeach; ?>
</ul>
<div class="carrito-total">
    <p>Total: <?php echo $valor . ' €' ?></p>
    <a href="resource_comprar.php">Comprar</a>
</div>
</body>
</html>
