<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de moda</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Tienda de moda</h1>
        <nav>
            <ul>
                <li><a href="#products">Productos</a></li>
                <li><a href="#cart">Carrito</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="products">
            <h2>Productos</h2>
            <!-- Los productos se cargarán aquí -->
        </section>
        <section id="cart">
            <h2>Carrito</h2>
            <ul id="cart-items">
                <!-- Los elementos del carrito se cargarán aquí -->
            </ul>
            <p id="cart-total">Total: $0.00</p>
            <button id="checkout">Pedir</button>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Tienda de moda. Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('app.js') }}"></script>
    <style>
        /* Estilos básicos */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

nav ul {
    list-style-type: none;
    padding: 0;
    display: flex;
    justify-content: center;
}

nav ul li {
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

main {
    padding: 20px;
}

section {
    margin-bottom: 40px;
}

.product {
    border: 1px solid #ddd;
    padding: 10px;
    margin: 10px;
    display: inline-block;
    width: 200px;
    text-align: center;
}

.product img {
    width: 100%;
    height: auto;
}

.product h2 {
    font-size: 1.2em;
    margin: 10px 0;
}

.product p {
    margin: 0 0 10px;
}

.add-to-cart {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    text-transform: uppercase;
}

.add-to-cart:hover {
    background-color: #218838;
}

#cart ul {
    list-style-type: none;
    padding: 0;
}

#cart-items li {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

#checkout {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    text-transform: uppercase;
}

#checkout:hover {
    background-color: #0056b3;
}

    </style>
</body>
</html>
