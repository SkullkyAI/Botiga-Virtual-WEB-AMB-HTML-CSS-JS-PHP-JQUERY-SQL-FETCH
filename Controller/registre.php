
<script src="js/funcions.js"></script>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once __DIR__ . "/../Model/connectaDB.php";
    $connexio = connectaDB();

    $Nombre = filter_var($_POST['Nombre'], FILTER_SANITIZE_STRING);
    $Email = filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL);
    $Contraseña = filter_var($_POST['Contraseña'], FILTER_SANITIZE_STRING);
    $Dirección = filter_var($_POST['Dirección'], FILTER_SANITIZE_STRING);
    $Teléfono = filter_var($_POST['Teléfono'], FILTER_SANITIZE_NUMBER_INT);
    $CP = filter_var($_POST['CP'], FILTER_SANITIZE_NUMBER_INT);
    $Población = filter_var($_POST['Población'], FILTER_SANITIZE_STRING);

    if (!$Nombre || !$Email || !$Contraseña || !$Dirección || !$Teléfono || !$CP || !$Población) {
        $_SESSION['message'] = "Error en los datos del formulario";
        header("Location: https://tdiw-j4.deic-docencia.uab.cat/index.php?action=registro");
        exit;
    }

    require __DIR__ . "/../Model/registro.php";
    $registrado = registro($Nombre, $Email, $Contraseña, $Dirección, $Teléfono, $CP, $Población, $connexio);

    if($registrado) {
        $_SESSION['message'] = "Bienvenido a Skullky 3D, $Nombre";
        header("Location: https://tdiw-j4.deic-docencia.uab.cat/index.php");
        exit;
    }

    else {
        $_SESSION['message'] = "Error al registrarse";
        header("Location: https://tdiw-j4.deic-docencia.uab.cat/index.php?action=registro");
        exit;
    }
}
else {
    require __DIR__ . "/../View/registro.php";
}
?>