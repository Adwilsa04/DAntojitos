<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <link rel="stylesheet" href="pagos.css">
</head>
<body>

<div class="container">
    <form action="">
        <div class="row">
            <div class="col">
                <h3 class="title">Datos Personales</h3>
                <div class="inputBox">
                    <span>Nombre Completo:</span>
                    <input type="text" placeholder="Laura Rosario">
                </div>
                <div class="inputBox">
                    <span>Email:</span>
                    <input type="email" placeholder="ejemplo@ejemplo.com">
                </div>
                <div class="inputBox">
                    <span>Tipo del pago:</span>
                    <select name="">
                        <option value="transferencia">Transferencia</option>
                        <option value="efectivo">Efectivo</option>
                        <option value="tarjeta">Tarjeta</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Descripción del pago:</span>
                    <input type="text" placeholder="Abono de ...">
                </div>
                <div class="inputBox">
                    <span>Monto:</span>
                    <input type="text" placeholder="...">
                </div>
            </div>
            <div class="col">
                <h3 class="title">Cuenta de Banco</h3>
                <div class="inputBox">
                    <span>Nombre del banco:</span>
                    <span>Santa Cruz</span>
                </div>
                <div class="inputBox">
                    <span>Cuenta de Banco:</span>
                    <span>111-222-333-44</span>
                </div>
                <div class="inputBox">
                    <span>Nombre de la cuenta de Banco:</span>
                    <span>D Antojitos</span>
                </div>
                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Nombre en la tarjeta:</span>
                    <input type="text" placeholder="mr. john deo">
                </div>
                <div class="inputBox">
                    <span>Número de la Tarjeta de crédito:</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>Mes de expiración:</span>
                    <input type="text" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Año de expiración:</span>
                        <input type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV:</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="proceed to checkout" class="submit-btn">
    </form>
</div>

</body>
</html>
