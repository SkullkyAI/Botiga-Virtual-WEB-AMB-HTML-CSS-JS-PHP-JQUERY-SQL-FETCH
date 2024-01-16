<!-- FILEPATH: /home/TDIW/tdiw-j4/public_html/View/login.php -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>SKULLKY3D - LOGIN</title>
	<link rel="stylesheet" type="text/css" href="/../Resources/css/estilo.css">
</head>
<header>
    <?php require __DIR__.'/menu_superior.php'; ?>
</header>

<h1>Login a SKULLKY3D - ¡Bienvenido de vuelta!</h1>

<body>
    <div id="layout">
        <section style="grid-area: login;">
            <div id="formDiv">
                <form id="login" class="login-form" action="/../index.php?action=login" method="POST">
                    <div>
                        <div>
                            <label for="Email">Dirección de correo electrónico:</label>
                            <input type="email" name="Email" id="Email" required>
                        </div>

                        <div>
                            <label for="Contraseña">Contraseña:</label>
                            <input type="password" name="Contraseña" id="Contraseña" pattern="[A-Za-z0-9]+" required>
                        </div>
                    </div>

                    <div>
                        <button type="submit">Enviar</button>
                    </div>
    
                </form>

            </div>
        </section>
    </div>    
</body>