<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
	if ($name) {
		echo '<p>¡Hola, '.$name.'!</p>';
	} else {
		echo '<p>¡Hola, anónimo!</p>';
	}
    if (isset($_SESSION['cart'])) {
        echo '<p>Hay '.$count.' productos en el carrito</p>';
        echo '<p>El valor total del carrito es de '.$valor.' €</p>';
        echo '<p>Ultimo producto añadido: '.$last_producte[0]['Nombre'].' ('.$cantidad.' unidades)</p>';
    } 
    if ($last_producte) {
        ?>
        <div class="last-product-container">
                <img src="<?php echo $last_producte[0]['Imagen'] ?>" alt="<?php echo $last_producte[0]['Nombre'] ?>">
        </div>
        <?php } ?>

        <p>SKULLKY3D - Derechos reservados &copy; 2023</p>
