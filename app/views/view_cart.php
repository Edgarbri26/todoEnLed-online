<?php require '../../Public/templates/header.php'; 
?>

<section class="section-cart">
        <article class="products">
            <h2>
            Carrito de compras
            </h2>

            <div class="cart-product">
                <img class="img-product" src="/assets/productos/IMG-20250520-WA0048.jpg" alt="">
                <div>
                    <h3>Faros delanteros </h3>
                    <p>precio</p>
                </div>
                <label>10</label>
                <!--input type="number"-->
                <h3>Total</h3>
                <button class="delete-button" type="button">eliminar</button>
            </div>
            
        </article>

        <aside id="summary">
            <h2>Resumen del pedido</h2>
            <div>
                <p>sub total de articulos <span>$$$</span></p>
                <p>costo de envio <span>$$$</span></p>
            </div>

            <h3>Subtotal <span>$$$</span></h3>

            <button type="button">Pagar</button>
        </aside>
    </section>

    <?php require '../../Public/templates/footer.php'; ?>