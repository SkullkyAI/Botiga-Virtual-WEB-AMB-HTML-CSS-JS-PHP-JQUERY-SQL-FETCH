<!-- FILEPATH: /home/TDIW/tdiw-j4/public_html/View/registro.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>SKULLKY3D - REGISTRO</title>
        <link rel="stylesheet" type="text/css" href="/../Resources/css/estilo.css">
    </head>
<header>
    <?php require __DIR__.'/menu_superior.php'; ?>
</header>

<h1>Registro a SKULLKY3D - ¡Bienvenido!</h1>

<body>
    <div id="layout">
        <section style="grid-area: registre;">
            <div id="formDiv">
                <form id="registro" class="registro-form" action="/../index.php?action=registro" method="POST">
                    <div>
                        <div>
                            <label for="Nombre">Nombre (Nick):</label>
                            <input type="text" name="Nombre" id="Nombre" pattern="[A-Za-z0-9]+" required>
                        </div>

                        <div>
                            <label for="Email">Dirección de correo electrónico:</label>
                            <input type="email" name="Email" id="Email" required>
                        </div>

                        <div>
                            <label for="Contraseña">Contraseña:</label>
                            <input type="password" name="Contraseña" id="Contraseña" pattern="[A-Za-z0-9]+" required>
                        </div>

                        <div>
                            <label for="Dirección">Dirección:</label>
                            <input type="text" name="Dirección" id="Dirección" maxlength="30" pattern="[A-Za-z0-9 ]+" required>
                        </div>
                        <div>
                            <label for="Teléfono">Teléfono:</label>
                            <input type="text" name="Teléfono" id="Teléfono" pattern="^\d{9}$" required>
                        </div>
                        <div>
                            <label for="Población">Población:</label>
                            <input type="text" name="Población" id="Población" maxlength="30" pattern="[A-Za-z ]+" required>
                        </div>

                        <div>
                            <label for="CP">Código Postal:</label>
                            <input type="text" name="CP" id="CP" pattern="^\d{5}$" required>
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