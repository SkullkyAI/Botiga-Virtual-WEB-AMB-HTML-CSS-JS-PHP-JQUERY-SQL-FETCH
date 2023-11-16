<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>SKULLKY3D</title>
	<link rel="stylesheet" type="text/css" href="/../Resources/css/estilo.css">
	<script src="/../Resources/js/funcions.js"></script>
</head>


<body>
	<header>
	 	<?php require __DIR__.'/View/menu_superior.php'; ?>
	</header>
	<img src="/../Resources/img/goron.png" alt="Goron" id="goron" onclick="document.getElementById('musicPlayer').play();">
	<audio id="musicPlayer" controls loop>
    <source src="/../Resources/audio/GoronCity.mp3" type="audio/mpeg">
    </audio>
	<h1>Bienvenido a Skullky3D - La mejor gorotienda de impresión 3D</h1>
	<div class="container">
		<?php require __DIR__.'/Controller/llistat_categories.php'; ?>
	</div>


	<footer>
		<p>SKULLKY3D - Derechos reservados &copy; 2023</p>
	</footer>

</body>
</html>
