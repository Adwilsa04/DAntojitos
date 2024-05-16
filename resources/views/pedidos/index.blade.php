<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="product.json">
    <script rel="" href="app.jss"></script>
</head>
<body>

    <header>
        <h1>Tienda de Relojes</h1>
        <x-index></x-index>

    </header>

    <div class="container">
        <header>
            <h1>LIST PRODUCT</h1>
            <div class="iconCart">
                <img src="icon.png">
                <div class="totalQuantity">0</div>
            </div>
        </header>

        <div class="listProduct">

            <div class="item">
                <img src="images/menu1.webp">
                <h2>CoPilot / Black / Automatic</h2>
                <div class="price">$550</div>
                <button href="checkout.html">Add To Cart</button>
            </div>

        </div>
    </div>

    <div class="cart">
        <h2>
            CART
        </h2>

        <div class="listCart">


            <div class="item">
                <img src="images/menu2.webp">
                <div class="content">
                    <div class="name">CoPilot / Black / Automatic</div>
                    <div class="price">$550 / 1 product</div>
                </div>
                <div class="quantity">
                    <button>-</button>
                    <span class="value">3</span>
                    <button>+</button>
                </div>
            </div>


        </div>

        <div class="buttons">
            <div class="close">
                CLOSE
            </div>
            <div class="checkout">
                <a href="checkout.html">CHECKOUT</a>
            </div>
        </div>
    </div>


    <script src="app.js"></script>
    
</body>
</html>