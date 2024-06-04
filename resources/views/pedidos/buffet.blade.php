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
            <a href="{{ route('pagservi') }}" style="text-decoration:none; color:white;"> Volver</a>
        </button> 
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
            <div class="head"><p>Mi Carrito</p></div>
            <div id="cartItem">Tu carrito está vacío</div>
            <div class="foot">
                <h3>Fecha y Hora del Pedido</h3>
                <input type="datetime-local" id="order-datetime">
                <h3>Total</h3>
                <h2 id="total">$ 0.00</h2>
                <button id="pay-button"><a href="{{ route('pago') }}">Pagar</a></button>
            </div>
        </div>
    </div>

    <script>
        const product = [
            { id: 12, image: '{{ asset('image/a1.jpg') }}', title: 'Menú 1', price: 550 },
            { id: 13, image: '{{ asset('image/a2.jpg') }}', title: 'Menú 2', price: 500 },
            { id: 14, image: '{{ asset('image/a3.jpg') }}', title: 'Menú 3', price: 575 },
            { id: 15, image: '{{ asset('image/4.jpg') }}', title: 'Menú 4', price: 500 },
            { id: 16, image: '{{ asset('image/a5.jpg') }}', title: 'Menú 5', price: 600 },
            { id: 17, image: '{{ asset('image/a6.jpg') }}', title: 'Menú 6', price: 590 },
            { id: 18, image: '{{ asset('image/7.jpg') }}', title: 'Menú 7', price: 550 },
            { id: 19, image: '{{ asset('image/8.jpg') }}', title: 'Menú 8', price: 530 },
            { id: 20, image: '{{ asset('image/9.jpg') }}', title: 'Menú 9', price: 500 },
            { id: 21, image: '{{ asset('image/10.jpg') }}', title: 'Menú 10', price: 500 },
            { id: 22, image: '{{ asset('image/11.jpg') }}', title: 'Menú 11', price: 520 },
            { id: 23, image: '{{ asset('image/12.jpg') }}', title: 'Menú 12', price: 510 }
        ];

        const categories = [...new Set(product.map((item) => item))];
        let i = 0;

        document.getElementById('root').innerHTML = categories.map((item) => {
            const { image, title, price } = item;
            return `
                <div class='box'>
                    <div class='img-box' onmouseover="showButton(this)" onmouseout="hideButton(this)">
                        <img class='images' src=${image}></img>
                        <div class='button-container' style="display: none;">
                            <button onclick='addtocart(${i++})'>ADD</button>
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
                                <img class='rowimg' src=${image}>
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
            border-radius: 50%;
            background-color: #8B0000;
            color: white;
            margin-left: 10px;
        }

        .container {
            display: flex;
            width: 70%;
            margin-bottom: 30px;
            position: relative;
        }

        #root {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }

        .sidebar {
            width: 80%;
            border-radius: 5px;
            background-color: #eee;
            margin-left: 20px;
            padding: 20px;
            text-align: center;
            display: none;
        }

       
        .head {
            background-color: #8B0000;
            border-radius: 3px;
            height: 50px;
            padding: 10px;
            margin-bottom: 20px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .foot {
            display: flex;
            justify-content: space-between;
            margin: 20px 0px;
            padding: 10px 0px;
            border-top: 1px solid #333;
            flex-direction: column;
            align-items: center;
        }

        .foot h3,
        .foot h2 {
            margin: 5px 0;
        }

        .foot input[type="datetime-local"] {
            margin: 10px 0;
            padding: 10px;
            width: 80%;
            font-size: 18px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .foot button {
            background-color: #8B0000;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            display: inline-block;
            border-bottom: none;
        }

        .foot button:hover {
            background-color: #333;
        }

        .cart-item input {
            width: 40px;
        }

        .box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .img-box {
            width: 100%;
            height: 260px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .images {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .button-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .box:hover .button-container {
            opacity: 1;
        }

        .button-container button {
            width: 70px;
            height: 40px;
            border: none;
            border-radius: 5px;
            background-color: #8B0000;
            padding: 5px;
            cursor: pointer;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .button-container button:hover {
            background-color: #333;
        }

        .bottom {
            margin-top: 10px;
            width: 100%;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .bottom p,
        .bottom h2 {
            margin: 5px 0;
        }

        h2 {
            font-size: 22px;
            color: green;
        }

        button i {
            margin-left: 10px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #ccc;
            margin-bottom: 15px;
        }

        .row-img {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 5px;
            margin-right: 10px;
        }

        .rowimg {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cart-item input {
            width: 40px;
            margin: 0 10px;
        }

        .cart-item p {
            flex: 1;
            text-align: left;
            font-size: 16px;
        }

        .cart-item .fas {
            cursor: pointer;
            color: black;
            margin-left: 10px;
        }

        .cart-item .fas:hover {
            color: darkred;
        }

        /* Estilos para pantallas de hasta 768px de ancho */
        @media screen and (max-width: 768px) {
            .container {
                width: 90%; /* Reducir el ancho del contenedor principal */
            }

            #root {
                grid-template-columns: repeat(2, 1fr); /* Cambiar a 2 columnas en lugar de 3 */
            }

            .sidebar {
                width: 100%; /* Ocupar todo el ancho en pantallas pequeñas */
            }
        }

        /* Estilos para pantallas de hasta 480px de ancho */
        @media screen and (max-width: 480px) {
            #root {
                grid-template-columns: repeat(1, 1fr); /* Cambiar a una sola columna */
            }
        }
    </style>
</body>
</html>
