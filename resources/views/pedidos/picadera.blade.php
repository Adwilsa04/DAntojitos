<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picadera </title>
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
        </div><script>
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
            cart.push({ ...categories[a] });
            localStorage.setItem("cart", JSON.stringify(cart));
            displaycart();
        }

        function delElement(a) {
            cart.splice(a, 1);
            localStorage.setItem("cart", JSON.stringify(cart));
            displaycart();
        }

        function displaycart() {
            let j = 0;
            let total = 0;
            document.getElementById("count").innerHTML = cart.length;
            if (cart.length == 0) {
                document.getElementById('cartItem').innerHTML = "Your cart is empty";
                document.getElementById("total").innerHTML = "$ 0.00";
            } else {
                document.getElementById("cartItem").innerHTML = cart.map((items, index) => {
                    const { image, title, price } = items;
                    total += price;
                    document.getElementById("total").innerHTML = `$ ${total}.00`;
                    return `
                        <div class='cart-item'>
                            <div class='row-img'>
                                <img class='rowimg' src=${image}>
                            </div>
                            <p style='font-size:12px;'>${title}</p>
                            <p style='font-size:12px;'>$ ${price}.00</p>
                            <i class="fas fa-trash" onclick='delElement(${j++})'></i>
                        </div>
                    `;
                }).join('');
            }
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
    font-size: 18px;
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
    width: 50%; /* Aumentar el tamaño del marco del carrito */
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
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}

.foot button:hover {
    background-color: #333;
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
    width: 80%;
    border: none;
    border-radius: 5px;
    background-color: #8B0000;
    padding: 10px 25px;
    cursor: pointer;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
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

    </style>
</body>
</html>

