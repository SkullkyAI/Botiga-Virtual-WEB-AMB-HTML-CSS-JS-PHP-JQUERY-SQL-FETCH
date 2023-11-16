

<ul class="categorias-container">
<?php foreach ($categories as $categoria): ?>
    <li class="categoria">
        <h3><a href="resource_llistat_productes.php?id_categoria=<?php echo $categoria['ID'] ?>"><?php echo $categoria['Nombre'] ?></a></h3>
        <p><?php echo $categoria['Edad'] ?> </p>
        <a href="resource_llistat_productes.php?id_categoria=<?php echo $categoria['ID'] ?>"><img src="<?php echo $categoria['Imagen'] ?>" alt="<?php echo $categoria['Nombre'] ?>"></a>
    </li>
<?php endforeach; ?>
</ul>
