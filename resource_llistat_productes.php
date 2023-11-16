 <!-- resource_llistat_categories.php -->
<html lang="ca">
<head>
<title>Lista de productos</title>
</head>
<body>

<header>
    <?php require __DIR__.'/View/menu_superior.php'; ?>
 </header>

<div class="container">
<?php require __DIR__.'/Controller/llistat_productes_categoria.php'; ?>
</div>

</body>
</html>