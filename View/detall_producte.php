

<div class="product-container">
        <div class="product-description">
                <h2><?php echo $detall_producte[0]['Nombre'] ?></h2>
                <img src="<?php echo $detall_producte[0]['Imagen'] ?>" alt="<?php echo $detall_producte[0]['Nombre'] ?>">
                <p><?php echo $detall_producte[0]['Descripción'] ?></p>
                <ul>
                        <li><strong>Precio:</strong> <?php echo $detall_producte[0]['Precio'] ?> €</li>
                        <li><strong>Nombre:</strong> <?php echo $detall_producte[0]['Nombre'] ?></li>
                        <li><strong>Material:</strong> <?php echo $detall_producte[0]['Plástico'] ?></li>
                        <li><strong>Fecha:</strong> <?php echo $detall_producte[0]['Fecha'] ?></li>
                </ul>
                <form id="add-to-cart-form" action="" method="post">
                        <input type="hidden" name="id_producte" value="<?php echo $detall_producte[0]['ID'] ?>">
                        <input type="number" name="quantity" value="1" min="1">
                        <button type="submit">Añadir al carrito</button>
                </form>
        </div>
</div>

