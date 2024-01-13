

<ul class="productos-container">
<?php foreach ($productes as $producte): ?>
    <li class="producto" id=<?php echo $producte['ID']?>>
        <h3><span><?php echo $producte['Nombre'] ?></span></h3>
        <a href="resource_detalle.php?id_producte=<?php echo $producte['ID'] ?>"><img src="<?php echo $producte['Imagen'] ?>" alt="<?php echo $producte['Nombre'] ?>"></a>
        <p><?php echo $producte['Descripción'] ?> </p>
        <p><?php echo $producte['Precio'] . ' €' ?> </p>
    </li>
<?php endforeach; ?>
</ul>