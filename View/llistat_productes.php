

<ul class="productos-container">
<?php foreach ($productes as $producte): ?>
    <li class="producto">
        <h3><a href="resource_detalle.php?id_producte=<?php echo $producte['ID'] ?>"><?php echo $producte['Nombre'] ?></a></h3>
        <a href="resource_detalle.php?id_producte=<?php echo $producte['ID'] ?>"><img src="<?php echo $producte['Imagen'] ?>" alt="<?php echo $producte['Nombre'] ?>"></a>
        <p><?php echo $producte['Descripción'] ?> </p>
        <p><?php echo $producte['Precio'] . ' €' ?> </p>
    </li>
<?php endforeach; ?>
</ul>