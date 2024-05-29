<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picadera </title>
    <link rel="stylesheet" href="Style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <p class="logo">Mi Tienda</p>
        <div class="cart-container" onclick="toggleCart()">
            <div class="cart">
                <i class="fa-solid fa-cart-shopping"></i>
                <p id="count">0</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="root"></div>
        <div id="sidebar" class="sidebar">
            <div class="head"><p>My Cart</p></div>
            <div id="cartItem">Your cart is empty</div>
            <div class="foot">
                <h3>Total</h3>
                <h2 id="total">$ 0.00</h2>
                <button id="pay-button">Pagar</button>
            </div>
        </div>
    </div>
    <script src="Carrito.js"></script>
</body>
</html>
