
<?php
#https:tdiw-j1.deic-j4

$action=$_GET['action'] ?? null;
switch ($action) {
	case 'categories':
		require __DIR__."/Controller/llistat_categories.php";
		break;
    case 'login': 
        require __DIR__ ."/Controller/login.php";
		break;
    case 'registro':
		require __DIR__."/Controller/registre.php";
		break;
    case 'logout':
		require __DIR__."/Controller/logout.php";
		break;
    case 'producto':
		require __DIR__."/Controller/producto.php";
		break;
    case 'carrito':
		require __DIR__."/Controller/carrito.php";
		break;
	case 'compra':
		require __DIR__."/Controller/compra.php";
		break;
	case 'compraRealizada':
		require __DIR__."/Controller/compraRealizada.php";
		break;
	default:
		require __DIR__."/resource_main.php";
		break;
}


?>