<script src="js/funcions.js"></script>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once __DIR__ . "/../Model/connectaDB.php";
    $connexio = connectaDB();

    $Email = filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL);
    $Contraseña = filter_var($_POST['Contraseña'], FILTER_SANITIZE_STRING);

    if (!$Email || !$Contraseña) {
        $_SESSION['message'] = "Error en los datos del formulario";
        header("Location: https://tdiw-j4.deic-docencia.uab.cat/index.php?action=login");
        exit;
    }

    require __DIR__ . "/../Model/login.php";
    $login = login($Email, $Contraseña, $connexio);

    if($login) {
        $usuari = getUsuari($Email, $connexio);
        $_SESSION['user_id'] = $usuari['ID'];
        $_SESSION['user_email'] = $usuari['Email'];
        $_SESSION['user_name'] = $usuari['Nombre'];
        $_SESSION['message'] = "¡Bienvenido de nuevo a Skullky 3D, " . $_SESSION['user_name'] . "!";
        header("Location: https://tdiw-j4.deic-docencia.uab.cat/index.php");
        exit;
    }

    else {
        $_SESSION['message'] = "Error al hacer login";
        header("Location: https://tdiw-j4.deic-docencia.uab.cat/index.php?action=login");
        exit;
    }
}
else {
    require __DIR__ . "/../View/login.php";
}
?>