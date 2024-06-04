const product = [
    { id: 0, image: 'image/1.jpg', title: 'Producto 1', price: 50 },
    { id: 1, image: 'image/2.jpg', title: 'Producto 2', price: 60 },
    { id: 2, image: 'image/3.jpg', title: 'Producto 3', price: 70 },
    { id: 3, image: 'image/4.jpg', title: 'Producto 4', price: 80 },
    { id: 4, image: 'image/5.jpg', title: 'Producto 5', price: 90 },
    { id: 5, image: 'image/6.jpg', title: 'Producto 6', price: 100 },
    { id: 6, image: 'image/7.jpg', title: 'Producto 7', price: 110 },
    { id: 7, image: 'image/8.jpg', title: 'Producto 8', price: 120 },
    { id: 8, image: 'image/9.jpg', title: 'Producto 9', price: 130 },
    { id: 9, image: 'image/10.jpg', title: 'Producto 10', price: 140 },
    { id: 10, image: 'image/11.jpg', title: 'Producto 11', price: 150 },
    { id: 11, image: 'image/12.jpg', title: 'Producto 12', price: 160 }
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
        document.getElementById('cartItem').innerHTML = "Tu carrito está vacío";
        document.getElementById("total").innerHTML = "$ 0.00";
        document.getElementById("subtotal").innerHTML = "$ 0.00";
    } else {
        document.getElementById("cartItem").innerHTML = cart.map((items, index) => {
            const { id, image, title, price, quantity } = items;
            const subtotal = price * quantity; // Calcular el subtotal de este producto
            total += subtotal; // Sumar al total
            document.getElementById("total").innerHTML = `$ ${total}.00`;
            return `
                <div class='cart-item'>
                    <div class='row-img'>
                        <img class='rowimg' src=${image}>
                    </div>
                    <p style='font-size:12px;'>${title}</p>
                    <input type='number' min='1' value='${quantity}' onchange='updateQuantity(${index}, this.value)'>
                    <p style='font-size:12px;'>$ ${price}.00</p>
                    <p style='font-size:12px;'>$ ${subtotal}.00</p> <!-- Mostrar el subtotal -->
                    <i class="fas fa-trash" onclick='delElement(${j++})'></i>
                </div>
            `;
        }).join('');
    }
    // Guardar el total en el localStorage
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
