

<ul class="categorias-container">
<?php foreach ($categories as $categoria): ?>
    <li class="categoria" id=<?php echo $categoria['ID']?>>
        <h3><span><?php echo htmlentities($categoria['Nombre'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?></span></h3>
        <p><?php echo htmlentities($categoria['Edad'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> </p>
        <a href="resource_llistat_productes.php?id_categoria=<?php echo htmlentities($categoria['ID'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>"><img src="<?php echo htmlentities($categoria['Imagen'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>" alt="<?php echo htmlentities($categoria['Nombre'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>"></a>
    </li>
<?php endforeach; ?>
</ul>
