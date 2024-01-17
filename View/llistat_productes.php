

<ul class="productos-container">
<?php 
if ($productes == null) {
    echo "<h1>No hay productos que coincidan con tu búsqueda</h1>";
} else {
    foreach ($productes as $producte) { ?>
        <li class="producto" id=<?php echo $producte['ID']?>>
            <h3><span><?php echo $producte['Nombre'] ?></span></h3>
            <a href="resource_detalle.php?id_producte=<?php echo $producte['ID'] ?>"><img src="<?php echo $producte['Imagen'] ?>" alt="<?php echo $producte['Nombre'] ?>"></a>
            <p><?php echo $producte['Descripción'] ?> </p>
            <p><?php echo $producte['Precio'] . ' €' ?> </p>
        </li>
    <?php }
}
?>
</ul>