<script src="js/funcions.js"></script>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once __DIR__ . "/../Model/connectaDB.php";

    if ($_POST['Contraseña'] != $_POST['Contraseña2']) {
        $_SESSION['message'] = "Las contraseñas no coinciden";
        header("Location: https://tdiw-j4.deic-docencia.uab.cat/index.php?action=registro");
        exit;
    }

    $connexio = connectaDB();
    if (!$connexio) {
        die("Error connecting to database");
    }
    $Nombre = filter_var($_POST['Nombre'], FILTER_SANITIZE_STRING);
    $Email = filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL);
    $Contraseña = filter_var($_POST['Contraseña'], FILTER_SANITIZE_STRING);
    $Dirección = filter_var($_POST['Dirección'], FILTER_SANITIZE_STRING);
    $Teléfono = filter_var($_POST['Teléfono'], FILTER_SANITIZE_NUMBER_INT);
    $CP = filter_var($_POST['CP'], FILTER_SANITIZE_NUMBER_INT);
    $Población = filter_var($_POST['Población'], FILTER_SANITIZE_STRING);
    $id_usuari = $_SESSION['user_id'];

    
    if (isset($_FILES['ImagenPerfil']) && !empty($_FILES['ImagenPerfil'])) {
        $img = $_FILES['ImagenPerfil']['name']; 
        $extension = pathinfo($img, PATHINFO_EXTENSION);
        $destinationPath = $filesAbsolutePath . $id_usuari . '.' . $extension;
        move_uploaded_file(
            $_FILES['ImagenPerfil']['tmp_name'],
            $destinationPath
        );
        
        $img = $id_usuari . '.' . $extension;
    }
    if (!$Nombre || !$Email || !$Contraseña || !$Dirección || !$Teléfono || !$CP || !$Población || !$img || !$id_usuari) {
        $_SESSION['message'] = "Error en los datos del formulario";
        header("Location: https://tdiw-j4.deic-docencia.uab.cat/index.php?action=mi_cuenta");
        exit;
    }

    require __DIR__ . "/../Model/modifica_usuari.php";
    $actualizado = modificaUsuari($id_usuari, $Nombre, $Email, $Contraseña, $Dirección, $Teléfono, $CP, $Población, $img, $connexio);

    if($actualizado) {
        $_SESSION['message'] = "Tus datos han sido actualizados, $Nombre";
        header("Location: https://tdiw-j4.deic-docencia.uab.cat/index.php");
        exit;
    }

    else {
        $_SESSION['message'] = "Error al modificar tus datos";
        header("Location: https://tdiw-j4.deic-docencia.uab.cat/index.php?action=mi_cuenta");
        exit;
    }
}
?>