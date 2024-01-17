<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($name)) {
	echo '<p>¡Hola, '.$name.'!</p>';
} else {
	echo '<p>¡Hola, anónimo!</p>';
}
if (isset($img) && $img != NULL) {  ?>
    <div class="user_img">
        <img src="<?php echo $img ?>" alt="<?php echo $img ?>">
    </div>
<?php } 
if (isset($_SESSION['cart']) && isset($count) && isset($valor) && isset($last_producte)) {
    echo '<p>Hay '.$count.' productos en el carrito</p>';
    echo '<p>El valor total del carrito es de '.$valor.' €</p>';
    if (isset($_SESSION['cart'][$last_producte[0]['ID']])) {
        echo '<p>Ultimo producto añadido: '.$last_producte[0]['Nombre'].' ('.$cantidad.' unidades)</p>';
    }
} 
if (isset($last_producte) && isset($_SESSION['cart'][$last_producte[0]['ID']])) { ?>
    <div class="last-product-container">
            <img src="<?php echo $last_producte[0]['Imagen'] ?>" alt="<?php echo $last_producte[0]['Nombre'] ?>">
    </div>
    <?php }  ?>

       
<p>SKULLKY3D - Derechos reservados &copy; 2023</p>
