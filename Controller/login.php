<script src="js/funcions.js"></script>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once __DIR__ . "/../Model/connectaDB.php";
    $connexio = connectaDB();

    $Email = filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL);
    $Contraseña = filter_var($_POST['Contraseña'], FILTER_SANITIZE_STRING);

    if (!$Email || !$Contraseña) {
        echo "Error en los datos del formulario";
        header("refresh:3;url=https://tdiw-j4.deic-docencia.uab.cat/index.php?action=login");
    }

    require __DIR__ . "/../Model/login.php";
    $login = login($Email, $Contraseña, $connexio);

    if($login) {
        $usuari = getUsuari($Email, $connexio);
        $_SESSION['user_id'] = $usuari['ID'];
        $_SESSION['user_email'] = $usuari['Email'];
        $_SESSION['user_name'] = $usuari['Nombre'];
        echo "Bienvenido de nuevo a Skullky 3D, " . $_SESSION['user_name'] . "!";
        header("refresh:3;url=https://tdiw-j4.deic-docencia.uab.cat/index.php");
    }

    else {
        echo "Error al hacer login";
        header("refresh:3;url=https://tdiw-j4.deic-docencia.uab.cat/index.php?action=login");
    }
}
else {
    require __DIR__ . "/../View/login.php";
}
?>