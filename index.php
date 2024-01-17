
<?php
session_start();
$action=$_GET['action'] ?? null;
$filesPublicPath = '/../fitxers/';
$filesAbsolutePath = '/home/TDIW/tdiw-j4/public_html/fitxers/';

switch ($action) {
	case 'productes_categoria':
		require __DIR__."/resource_llistat_productes.php";
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
	case 'nosotros':
		require __DIR__."/Controller/nosotros.php";
		break;
	case 'compra':
		require __DIR__."/Controller/compra.php";
		break;
	case 'compraRealizada':
		require __DIR__."/Controller/compraRealizada.php";
		break;
	case 'mi_cuenta':
		require __DIR__."/Controller/mi_cuenta.php";
		break;
	case 'modifica_usuari':
		require __DIR__."/Controller/modifica_usuari.php";
		break;
	case 'cerca':
		require __DIR__."/resource_cercador.php";
		break;
	default:
		require __DIR__."/resource_main.php";
		break;
}


?>