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
        <button id="button"> <a href="{{route('pagservi')}}" style="text-decoration:none; color:white;"> Volver</a></button> 
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
                <h3>Subtotal</h3>
                <h2 id="subtotal">$ 0.00</h2>
                <label for="deliveryDate">Fecha y Hora de Entrega:</label>
                <input type="datetime-local" id="deliveryDate" name="deliveryDate">
                <button id="pay-button"><a href="{{ route('pago') }}">Pagar</a></button>
            </div>
        </div>
    </div>

<script>
    const product = [
        { id: 0, image: '{{ asset('image/a.jpg') }}', title: 'Bolovan', price: 80 },
        { id: 1, image: '{{ asset('image/b.jpg') }}', title: 'Pastelistos', price: 45 },
        { id: 2, image: '{{ asset('image/c.jpg') }}', title: 'Quipes', price: 35 },
        { id: 3, image: '{{ asset('image/d.jpg') }}', title: 'Wraps', price: 110 },
        { id: 4, image: '{{ asset('image/e.jpg') }}', title: 'Sándwich', price: 65 },
        { id: 5, image: '{{ asset('image/f.jpg') }}', title: 'Canapé', price: 130 },
        { id: 6, image: '{{ asset('image/g.jpg') }}', title: 'Mini croisant rellenos', price: 95 },
        { id: 7, image: '{{ asset('image/h.jpg') }}', title: 'Croquetas', price: 55 },
        { id: 8, image: '{{ asset('image/i.jpg') }}', title: 'Tabla de quesos y embutidos', price: 750 },
        { id: 9, image: '{{ asset('image/j.jpg') }}', title: 'Pinchos caprese', price: 120 },
        { id: 10, image: '{{ asset('image/k.jpg') }}', title: 'Bizcocho de maiz', price: 50 },
        { id: 11, image: '{{ asset('image/l.jpg') }}', title: 'Mini pay', price: 30 }
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
        let subtotal = 0;
        document.getElementById("count").innerHTML = cart.length;
        if (cart.length == 0) {
            document.getElementById('cartItem').innerHTML = "Tu carrito está vacío";
            document.getElementById("total").innerHTML = "$ 0.00";
            document.getElementById("subtotal").innerHTML = "$ 0.00";
        } else {
            document.getElementById("cartItem").innerHTML = cart.map((items, index) => {
                const { image, title, price, quantity } = items;
                total += price * quantity;
                subtotal += price;
                document.getElementById("total").innerHTML = `$ ${total}.00`;
                document.getElementById("subtotal").innerHTML = `$ ${subtotal}.00`;
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

body {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
a {
    color: white;
    text-decoration: none; /* Quitar la subrayado */
}

button a {
    color: white;
    text-decoration: none; /* Quitar la subrayado */
}

button#button {
    font-size: 24px; /* Aumentar el tamaño de fuente */
    padding: 5px 30px; /* Aumentar el padding */
    background-color: #8B0000;
    border: none;
    border-radius: 5px;
    cursor: pointer;
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
    width: 80%; /* Aumentar el tamaño del marco del carrito */
    border-radius: 5px;
    background-color: #eee;
    margin-left: 20px;
    padding: 20px; /* Aumentar el padding */
    text-align: center;
    display: none;
}

.head {
    background-color: #8B0000;
    border-radius: 3px;
    height: 50px; /* Aumentar la altura */
    padding: 10px;
    margin-bottom: 20px;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px; /* Aumentar el tamaño de fuente */
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

.foot h3, .foot h2 {
    margin: 5px 0;
}

.foot button {
    background-color: #8B0000;
    color: white; /* Cambiar el color del texto a blanco */
    border: none;
    border-radius: 5px;
    padding: 10px 15px; /* Reducir el padding horizontal */
    cursor: pointer;
    text-decoration: none; /* Quitar la subrayado */
    display: inline-block; /* Ajustar el botón como un bloque en línea */
    border-bottom: none; /* Quitar la línea debajo */
}

.foot button:hover {
    background-color: #333;
    text-decoration: none; /* Quitar la subrayado en el hover */
}

.cart-item input {
    width: 40px; /* Reducir el ancho del cuadro de cantidad */
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
    height: 260px; /* Aumentar la altura de la imagen */
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
    width: 70px; /* Reducir el ancho del botón */
    height: 40px; /* Reducir la altura del botón */
    border: none;
    border-radius: 5px;
    background-color: #8B0000;
    padding: 5px; /* Reducir el padding dentro del botón */
    cursor: pointer;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 50%; /* Centrar verticalmente */
    left: 50%; /* Centrar horizontalmente */
    transform: translate(-50%, -50%); /* Centrar exactamente en el medio */
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

.bottom p, .bottom h2 {
    margin: 5px 0;
}

h2 {
    font-size: 22px; /* Aumentar el tamaño de la fuente */
    color: green;
}

button i {
    margin-left: 10px;
}

.cart-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 0; /* Aumentar el padding */
    border-bottom: 1px solid #ccc;
    margin-bottom: 15px; /* Aumentar el margen */
}

.row-img {
    width: 60px; /* Aumentar el tamaño de la imagen en el carrito */
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
    width: 40px; /* Ancho original */
    margin: 0 10px; /* Margen horizontal de 10px */
}

.cart-item p {
    flex: 1;
    text-align: left;
    font-size: 16px; /* Aumentar el tamaño del texto */
}

.cart-item .fas {
    cursor: pointer;
    color: black; /* Cambiar el color del icono a negro */
    margin-left: 10px;
}

.cart-item .fas:hover {
    color: darkred;
}

/* Estilos para pantallas de hasta 480px de ancho */
@media screen and (max-width: 480px) {
    #root {
        grid-template-columns: repeat(1, 1fr); /* Cambiar a una sola columna */
    }
}

@media screen and (max-width: 768px) {
    .sidebar {
        width: 100%; /* Ocupar todo el ancho en pantallas pequeñas */
        margin-left: 0; /* Eliminar el margen izquierdo */
        padding: 10px; /* Reducir el padding */
    }
}
</style>
</body>
</html>
