
<script src="js/funcions.js"></script>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once __DIR__ . "/../Model/connectaDB.php";
    $connexio = connectaDB();

    $Nombre = $_POST['Nombre'];
    $Email = $_POST['Email'];
    $Contraseña = $_POST['Contraseña'];
    $Dirección = $_POST['Dirección'];
    $Teléfono = $_POST['Teléfono'];
    $CP = $_POST['CP'];
    $Población = $_POST['Población'];



    require __DIR__ . "/../Model/registro.php";
    $registrado = registro($Nombre, $Email, $Contraseña, $Dirección, $Teléfono, $CP, $Población, $connexio);

    if($registrado) {
        echo "Bienvenido a Skullky 3D, $Nombre";
        header("refresh:3;url=https://tdiw-j4.deic-docencia.uab.cat/index.php");
    }

    else {
        echo "Error al registrarse";
        header("refresh:3;url=https://tdiw-j4.deic-docencia.uab.cat/index.php?action=registro");
    }
}
else {
    require __DIR__ . "/../View/registro.php";
}
?>