<?php
if (isset($_POST['vaciar'])) {
    $_SESSION['cart'] = array();
} elseif (isset($_POST['product_id']) && isset($_POST['remove'])) {
    unset($_SESSION['cart'][$_POST['product_id']]);
} elseif (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $_SESSION['cart'][$_POST['product_id']] = $_POST['quantity'];
}
?>

<html lang="ca">

<head>
    <title>Carrito</title>
</head>

<body>

<header>
	 	<?php require __DIR__.'/../View/menu_superior.php'; ?>
</header>

<ul class="carrito-container">
    <?php $valor = 0; $count = 0; $precios = array();
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($productes as $producte): 
            if (isset($_SESSION['cart'][$producte[0]['ID']])) {
                $valor += $producte[0]['Precio'] * $_SESSION['cart'][$producte[0]['ID']];
                $count += $_SESSION['cart'][$producte[0]['ID']];
                $precios[$producte[0]['ID']] = $producte[0]['Precio'] * $_SESSION['cart'][$producte[0]['ID']];
                ?>
                <li class="producto-carrito" id=<?php echo $producte[0]['ID']?>>
                    <div class="producto-info">
                        <a href="resource_detalle.php?id_producte=<?php echo $producte[0]['ID'] ?>">
                            <img src="<?php echo $producte[0]['Imagen'] ?>" alt="<?php echo $producte[0]['Nombre'] ?>">
                        </a>
                        <h3><?php echo $producte[0]['Nombre'] ?></h3>
                        <p><?php echo $producte[0]['Descripción'] ?></p>
                        <p><?php echo $producte[0]['Precio'] * $_SESSION['cart'][$producte[0]['ID']]. ' €' ?></p>
                    </div>
                    <form method="post" action="carrito.php" class="producto-control"">
                        <input type="hidden" name="product_id" value="<?php echo $producte[0]['ID'] ?>">
                        <input type="number" name="quantity" min="1" value="<?php echo $_SESSION['cart'][$producte[0]['ID']] ?>" onchange="this.form.submit()">
                        <button type="submit" name="remove" value="1">Eliminar</button>
                    </form>
                </li>
                <?php }
        endforeach; 
} 
$_SESSION['precios'] = $precios;
$_SESSION['valor'] = $valor;
$_SESSION['count'] = $count;
?>
</ul>
<?php
if ($count > 0) { ?>
<form method="post" action="carrito.php" class="vaciar-carrito">
    <button type="submit" name="vaciar" value="1">Vaciar carrito</button>
</form>
<?php } ?> 

<div class="carrito-total">
    <h2>Productos: <?php echo $count ?></h2>
    <h2>Total: <?php echo $valor . ' €' ?></h2>
    <?php if ($count > 0) { ?>
        <a href="/../Controller/Comprar.php">Comprar</a>
    <?php } ?>
</div>

</body>
</html>
