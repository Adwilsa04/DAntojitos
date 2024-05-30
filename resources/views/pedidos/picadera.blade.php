<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picadera</title>
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
            <div class="head"><p>Mi Carrito</p></div>
            <div id="cartItem">Tu carrito está vacío</div>
            <div class="foot">
                <h3>Total</h3>
                <h2 id="total">$ 0.00</h2>
                <button id="pay-button"><a href="{{ route('pago') }}">Pagar</a></button>
            </div>
        </div>
    </div>

<script>
    const product = [
        { id: 0, image: '{{ asset('image/1.jpg') }}', title: 'Producto 1', price: 50 },
        { id: 1, image: '{{ asset('image/2.jpg') }}', title: 'Producto 2', price: 60 },
        { id: 2, image: '{{ asset('image/3.jpg') }}', title: 'Producto 3', price: 70 },
        { id: 3, image: '{{ asset('image/4.jpg') }}', title: 'Producto 4', price: 80 },
        { id: 4, image: '{{ asset('image/5.jpg') }}', title: 'Producto 5', price: 90 },
        { id: 5, image: '{{ asset('image/6.jpg') }}', title: 'Producto 6', price: 100 },
        { id: 6, image: '{{ asset('image/7.jpg') }}', title: 'Producto 7', price: 110 },
        { id: 7, image: '{{ asset('image/8.jpg') }}', title: 'Producto 8', price: 120 },
        { id: 8, image: '{{ asset('image/9.jpg') }}', title: 'Producto 9', price: 130 },
        { id: 9, image: '{{ asset('image/10.jpg') }}', title: 'Producto 10', price: 140 },
        { id: 10, image: '{{ asset('image/11.jpg') }}', title: 'Producto 11', price: 150 },
        { id: 11, image: '{{ asset('image/12.jpg') }}', title: 'Producto 12', price: 160 }
    ];

    const categories = [...new Set(product.map((item) => item))];
    let i = 0;

    document.getElementById('root').innerHTML = categories.map((item) => {
        const { image, title, price } = item;
        return `
            <div class='box'>
                <div class='img-box'>
                    <img class='images' src=${image}></img>
                    <div class='button-container'>
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
                total += price * quantity;
                document.getElementById("total").innerHTML = `$ ${total}.00`;
                return `
                    <div class='cart-item'>
                        <div class='row-img'>
                            <img class='rowimg' src=${image}>
                        </div>
                        <p style='font-size:12px;'>${title}</p>
                        <input type='number' min='1' value='${quantity}' onchange='updateQuantity(${index}, this.value)'>
                        <p style='font-size:12px;'>$ ${price}.00</p>
                        <i class="fas fa-trash" onclick='delElement(${j++})'></i>
                    </div>
                `;
            }).join('');
        }
        // Guarda el total en el localStorage
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
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
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
        width: 60%;
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
    }

    .foot {
        display: flex;
        justify-content: space-between;
        margin: 20px 0px;
        padding: 10px 0px;
        border-top: 1px solid #333;
    }

    .foot button {
        background-color: #8B0000;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
    }

    .foot button a {
        text-decoration: none;
        color: white;
    }

    .box {
        width: 100%;
        height: 400px;
        border-radius: 10px;
        border: 2px solid #ddd;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        box-shadow: 0px 0px 5px 0px #333;
        background-color: white;
    }

    .img-box {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .images {
        width: 100%;
        height: 100%;
        border-radius: 10px;
    }

    .button-container {
        margin-top: 15px;
    }

    .button-container button {
        border: 1px solid #8B0000;
        border-radius: 5px;
        padding: 5px 10px;
        cursor: pointer;
        font-weight: bold;
        color: #8B0000;
        background-color: white;
        transition: background-color 0.3s, color 0.3s;
    }

    .button-container button:hover {
        background-color: #8B0000;
        color: white;
    }

    .bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
        padding: 20px;
    }

    .cart-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .row-img {
        width: 30%;
        height: auto;
    }

    .rowimg {
        width: 100%;
        height: 100%;
    }

    .fa-trash {
        color: red;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            align-items: center;
        }

        #root {
            grid-template-columns: repeat(2, 1fr);
        }

        .sidebar {
            width: 100%;
            margin-left: 0;
        }
    }

    @media (max-width: 480px) {
        #root {
            grid-template-columns: 1fr;
        }
    }

</style>
</body>
</html>
