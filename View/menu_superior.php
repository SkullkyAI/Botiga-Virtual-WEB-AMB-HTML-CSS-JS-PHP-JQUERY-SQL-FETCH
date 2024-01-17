<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>SKULLKY3D</title>
	<link rel="stylesheet" type="text/css" href="/../Resources/css/estilo.css">
	<script src="/../Resources/js/jquery-3.7.1.min.js"></script>
	<script src="/../Resources/js/funcions.js"></script>
</head>


<body>
	<header class=menusuperior>
		<img src="/../Resources/img/skullky3d.png" alt="Logo de SKULLKY3D" class=logo>
		<nav>
			<ul>
				<form method="post" action="/../index.php?action=cerca">
			    	<li><input type="text" id="search" name="cerca" placeholder="Buscar productos..."></li>
				</form>
				<li><a href="/../index.php">Inicio</a></li>
				<li><a href="#">Nosotros</a></li>
				<li><a href="#">Materiales</a></li>
				<li><a href="#">Contáctanos</a></li>
				
		<?php	if (isset($_SESSION['user_id'])) { ?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle">&#128100;</a>
						<ul class="dropdown-menu">
								<li><a href="/../Controller/mi_cuenta.php">Mi cuenta</a></li>
								<li><a href="/../Controller/llista_comandes.php">Mis compras</a></li>
								<li><a href="/../Controller/logout.php">Cerrar Sesión</a></li>
						</ul>
					</li>
					<li><a href="/../Controller/carrito.php">&#128722;</a></li>
		<?php } else { ?>
					<li><a href="/../View/registro.php">Registro</a></li>
					<li><a href="/../View/login.php">Login</a></li> 
			<?php } ?>	
			</ul>
		</nav>
	</header>
</body>

<?php
if (isset($_SESSION['message'])) {
	if (isset($_SESSION['message'])) {
		echo '<div class="alert">
				<span class="close" onclick="this.parentElement.style.display=\'none\';">&times;</span>' 
				. $_SESSION['message'] . 
			  '</div>';
		unset($_SESSION['message']);
	}
}
?>