<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Pedido</title>
    <style>
                @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap');

        body {
            font-family: 'Cinzel';
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .highlight {
            font-weight: bold;
            color: #8B0000;
        }
        .footer {
            text-align: right;
        }
        .footer button {
            font-family: 'Cinzel';
            background-color: #8B0000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            margin-right: 10px;
        }
        .footer button:hover {
            font-family: 'Cinzel';
            background-color: #333;
        }
        .footer input {
            font-family: 'Cinzel';
            padding: 8px;
            font-size: 16px;
            width: calc(100% - 16px);
            margin-bottom: 10px;
        }
        .header {
            text-align: left;
            margin-bottom: 20px;
        }
        .header button {
            font-family: 'Cinzel';
            background-color: #8B0000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            margin-right: 10px;
        }
        .header button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <button onclick="window.history.back()">Volver</button>
        </div>
        <h1>DETALLES DEL PEDIDO</h1>
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody id="order-details-body">
                <!-- Aquí se agregan las filas dinámicamente -->
            </tbody>
        </table>

        <div class="footer">
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td style="text-align: right;" class="highlight"><strong>Total:</strong></td>
                        <td id="order-total" class="highlight"></td>
                    </tr>
                    <tr>
                        <td style="text-align: right;" class="highlight"><strong>Fecha y Hora del Pedido:</strong></td>
                        <td id="order-datetime" class="highlight"></td>
                    </tr>
                </tbody>
            </table>
            <button><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YOUR_BUTTON_ID" id="paypal-button" style="text-decoration:none;">
Pagar </a></button>
<button onclick="window.print()">IMPRIMIR</button>


        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Recuperar datos del almacenamiento local
                const cartData = localStorage.getItem("cartData");
                const orderDatetime = localStorage.getItem("orderDatetime");

                // Convertir datos del carrito a objeto
                const cart = JSON.parse(cartData);

                // Mostrar detalles del pedido en la tabla
                const orderDetailsBody = document.getElementById("order-details-body");
                let total = 0;

                if (cart) {
                    cart.forEach(item => {
                        const row = `
                            <tr>
                                <td>${item.title}</td>
                                <td>${item.quantity}</td>
                                <td>$${item.price.toFixed(2)}</td>
                                <td>$${(item.price * item.quantity).toFixed(2)}</td>
                            </tr>
                        `;
                        orderDetailsBody.innerHTML += row;
                        total += item.price * item.quantity;
                    });

                    // Mostrar total del pedido
                    document.getElementById("order-total").innerText = `$${total.toFixed(2)}`;

                    // Mostrar fecha/hora del pedido
                    document.getElementById("order-datetime").innerText = orderDatetime.replace("T", " ").slice(0, 16);
                } else {
                    orderDetailsBody.innerHTML = '<tr><td colspan="4">No hay datos en el carrito.</td></tr>';
                }
            });

            function handlePayment() {
                alert('Pago procesado.');
                // Aquí puedes añadir la lógica para procesar el pago
            }

            function handleCancel() {
                alert('Pedido cancelado.');
                // Aquí puedes añadir la lógica para cancelar el pedido
            }
        </script>
    </div>
</body>
</html>
