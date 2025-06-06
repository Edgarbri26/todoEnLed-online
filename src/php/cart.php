<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="icon" href="assets/logo.ico">
    <title>TodoEnLed</title>
</head>
<body>
    <todoenled-header></todoenled-header>

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

    <script src="../js/compents/todoEnLed-header.js"></script>
    <script src="../js/script.js"></script>
    
</body>
</html>