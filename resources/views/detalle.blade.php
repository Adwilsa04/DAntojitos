<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buffet</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <button id="button">
            <a href="#" style="text-decoration:none; color:white;">Volver</a>
        </button>
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
            <div class="head"><p>Mi Carrito</p></div>
            <div id="cartItem">Tu carrito está vacío</div>
            <div class="foot">
                <h3>Fecha y Hora del Pedido</h3>
                <input type="datetime-local" id="order-datetime">
                <h3>Total</h3>
                <h2 id="total">$ 0.00</h2>
                <button id="pay-button">PAGAR</button>
                <button id="cancel-button">CANCELAR</button>
            </div>
        </div>
    </div>

    <script>
        const product = [
            { id: 12, image: 'image/a1.jpg', title: 'Menú 1', price: 550 },
            { id: 13, image: 'image/a2.jpg', title: 'Menú 2', price: 500 },
            { id: 14, image: 'image/a3.jpg', title: 'Menú 3', price: 575 },
            { id: 15, image: 'image/4.jpg', title: 'Menú 4', price: 500 },
            { id: 16, image: 'image/a5.jpg', title: 'Menú 5', price: 600 },
            { id: 17, image: 'image/a6.jpg', title: 'Menú 6', price: 590 },
            { id: 18, image: 'image/7.jpg', title: 'Menú 7', price: 550 },
            { id: 19, image: 'image/8.jpg', title: 'Menú 8', price: 530 },
            { id: 20, image: 'image/9.jpg', title: 'Menú 9', price: 500 },
            { id: 21, image: 'image/10.jpg', title: 'Menú 10', price: 500 },
            { id: 22, image: 'image/11.jpg', title: 'Menú 11', price: 520 },
            { id: 23, image: 'image/12.jpg', title: 'Menú 12', price: 510 }
        ];

        const categories = [...new Set(product.map((item) => item))];
        let i = 0;

        document.getElementById('root').innerHTML = categories.map((item) => {
            const { image, title, price } = item;
            return `
                <div class='box'>
                    <div class='img-box' onmouseover="showButton(this)" onmouseout="hideButton(this)">
                        <img class='images' src=${image} alt="${title}">
                        <div class='button-container' style="display: none;">
                            <button onclick='addtocart(${i++})'>Añadir</button>
                        </div>
                    </div>
                    <div class='bottom'>
                        <p>${title}</p>
                        <h2>$ ${price}.00</h2>
                    </div>
                </div>
            `;
        }).join('');

        let cart = JSON.parse(localStorage.getItem("cart")) || [];

        function addtocart(a) {
            let item = cart.find(item => item.id === categories[a].id);
            if (item) {
                item.quantity += 1;
            } else {
                cart.push({ ...categories[a], quantity: 1 });
            }
            localStorage.setItem("cart", JSON.stringify(cart));
            displaycart();
        }

        function delElement(a) {
            cart.splice(a, 1);
            localStorage.setItem("cart", JSON.stringify(cart));
            displaycart();
        }

        function updateQuantity(index, quantity) {
            cart[index].quantity = parseInt(quantity);
            localStorage.setItem("cart", JSON.stringify(cart));
            displaycart();
        }

        function displaycart() {
            let j = 0;
            let total = 0;
            document.getElementById("count").innerHTML = cart.length;
            if (cart.length == 0) {
                document.getElementById('cartItem').innerHTML = "Tu carrito está vacío";
                document.getElementById("total").innerHTML = "$ 0.00";
            } else {
                document.getElementById("cartItem").innerHTML = cart.map((items, index) => {
                    const { image, title, price, quantity } = items;
                    const subtotal = price * quantity;
                    total += subtotal;
                    document.getElementById("total").innerHTML = `$ ${total}.00`;
                    return `
                        <div class='cart-item'>
                            <div class='row-img'>
                                <img class='rowimg' src=${image} alt="${title}">
                            </div>
                            <p style='font-size:12px;'>${title}</p>
                            <input type='number' min='1' value='${quantity}' onchange='updateQuantity(${index}, this.value)'>
                            <p style='font-size:12px;'>$ ${price}.00</p>
                            <p style='font-size:12px;'>Subtotal: $ ${subtotal}.00</p>
                            <i class="fas fa-trash" onclick='delElement(${j++})'></i>
                        </div>
                    `;
                }).join('');
            }
            localStorage.setItem("cartTotal", total);
        }

        function toggleCart() {
            const sidebar = document.getElementById('sidebar');
            if (sidebar.style.display === 'none' || sidebar.style.display === '') {
                sidebar.style.display = 'block';
            } else {
                sidebar.style.display = 'none';
            }
        }

        function showButton(element) {
            const buttonContainer = element.querySelector('.button-container');
            buttonContainer.style.display = 'block';
        }

        function hideButton(element) {
            const buttonContainer = element.querySelector('.button-container');
            buttonContainer.style.display = 'none';
        }

        document.addEventListener('DOMContentLoaded', () => {
            displaycart();
        });

        document.getElementById('pay-button').addEventListener('click', () => {
            alert('Redirigiendo a la página de pago.');
            // Aquí puedes agregar la lógica para redirigir a la página de pago real
        });

        document.getElementById('cancel-button').addEventListener('click', () => {
            cart = [];
            localStorage.setItem("cart", JSON.stringify(cart));
            displaycart();
            alert('Pedido cancelado.');
        });
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cinzel', serif;
            font-size: 18px;
        }

        a {
            color: #fff;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        button#button {
            background-color: #8B0000;
            border: none;
            border-radius: 5px;
            padding: 10px 30px; /* Aumentar el padding */
            font-size: 18px;
            cursor: pointer;
        }

        button#button a {
            color: white;
            text-decoration: none;
        }

        .header {
            width: 100%;
            background-color: transparent;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .header .logo {
            font-size: 30px;
            font-weight: bold;
            color: white;
        }

        .cart-container {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            align-items: center;
        }

        .cart {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 7px 10px;
            border-radius: 3px;
        }

        .cart p {
            height: 22px;
            width: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: crimson;
            color: white;
            border-radius: 50%;
            margin-left: 4px;
            font-size: 14px;
        }

        .container {
            display: flex;
            margin-top: 20px;
        }

        .box {
            width: 300px;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px #999;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .img-box {
            width: 100%;
            height: 300px;
            position: relative;
            overflow: hidden;
        }

        .img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .button-container {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .bottom {
            text-align: center;
        }

        .bottom p {
            font-size: 20px;
            margin-top: 10px;
        }

        .bottom h2 {
            margin-top: 10px;
            font-size: 24px;
            color: green;
        }

        .sidebar {
            width: 350px;
            height: 100vh;
            position: fixed;
            top: 0;
            right: 0;
            background: white;
            box-shadow: 0 0 10px black;
            overflow-y: auto;
            display: none;
            padding: 10px;
            box-sizing: border-box;
        }

        .head {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid grey;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }

        .row-img {
            width: 50px;
            height: 50px;
        }

        .rowimg {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .foot {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .foot h2 {
            color: green;
        }

        .foot button {
            padding: 10px 20px;
            border: none;
            background-color: #8B0000;
            color: white;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            margin: 10px;
        }

        .foot input {
            margin-bottom: 10px;
            padding: 5px;
            font-size: 16px;
        }
    </style>
</body>
</html>
