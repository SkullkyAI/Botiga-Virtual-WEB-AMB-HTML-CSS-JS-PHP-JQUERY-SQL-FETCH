
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Modifica tu cuenta</title>
        <link rel="stylesheet" type="text/css" href="/../Resources/css/estilo.css">
    </head>
<header>
    <?php require __DIR__.'/menu_superior.php'; ?>
</header>

<h1> Modifica tu cuenta </h1>

<body>
    <div id="layout">
        <section style="grid-area: mi_cuenta;">
            <div id="formDiv">
                <form id="mi_cuenta" class="registro-form" action="/../index.php?action=modifica_usuari" method="POST" enctype="multipart/form-data">
                    <div>
                        <div>
                            <label for="Nombre">Nombre (Nick):</label>
                            <input type="text" name="Nombre" id="Nombre" pattern="[A-Za-z ]+" value="<?php echo htmlspecialchars($usuari[0]['Nombre']); ?>" required>
                        </div>

                        <div>
                            <label for="Email">Dirección de correo electrónico:</label>
                            <input type="email" name="Email" id="Email" value="<?php echo htmlspecialchars($usuari[0]['Email']); ?>" required>
                        </div>

                        <div>
                            <label for="Contraseña">Nueva contraseña:</label>
                            <input type="password" name="Contraseña" id="Contraseña" pattern="[A-Za-z0-9]+"  required>
                        </div>

                        <div>
                            <label for="Contraseña2">Repite la contraseña:</label>
                            <input type="password" name="Contraseña2" id="Contraseña2" pattern="[A-Za-z0-9]+" required>
                        </div>

                        <div>
                            <label for="Dirección">Dirección:</label>
                            <input type="text" name="Dirección" id="Dirección" maxlength="30" pattern="[A-Za-z ]+" value="<?php echo htmlspecialchars($usuari[0]['Dirección']); ?>" required>
                        </div>
                        <div>
                            <label for="Teléfono">Teléfono:</label>
                            <input type="text" name="Teléfono" id="Teléfono" pattern="^\d{9}$" value="<?php echo htmlspecialchars($usuari[0]['Teléfono']); ?>" required>
                        </div>
                        <div>
                            <label for="Población">Población:</label>
                            <input type="text" name="Población" id="Población" maxlength="30" pattern="[A-Za-z ]+" value="<?php echo htmlspecialchars($usuari[0]['Poblacion']); ?>" required>
                        </div>

                        <div>
                            <label for="CP">Código Postal:</label>
                            <input type="text" name="CP" id="CP" pattern="^\d{5}$" value="<?php echo htmlspecialchars($usuari[0]['Código postal']); ?>" required>
                        </div>

                        <div>
                            <label for="ImagenPerfil">Imagen de perfil:</label>
                            <input type="file" name="ImagenPerfil" id="ImagenPerfil">
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