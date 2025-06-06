<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/product.css">
    <title>Document</title>
</head>
<body>
    <todoenled-header></todoenled-header>

    <section>
        <img class="img-product" src="../../assets/productos/2-luces.jpg" alt="luz">
        <div class="info-product">
            <h2>nombre</h2>
            <span>precio</span>
            <input min="1" max="" type="number" value="1">
            <button type="button" class="btn" onclick="agregarAlCarrito(2)">
                        <span class="icon">
                            <svg viewBox="0 0 175 80" width="40" height="40">
                                <rect width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                                <rect y="30" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                                <rect y="60" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                            </svg>
                        </span>
                        <span class="text">Add</span>
                    </button>
            <button class="btn" id="btn-comprar" type="button">comprar ahora</button>
        </div>
    </section>

    <script src="../js/compents/todoEnLed-header.js"></script>
    <script src="../js/script.js"></script>
    
</body>
</html>