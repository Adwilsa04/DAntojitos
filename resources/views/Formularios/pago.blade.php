<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pago</title>
    <link rel="stylesheet" href="pago.css">
    <link rel="icon" type="image/png" href="imagenes/Logo.icon">
</head>
<body>
<div class="container">
    <form action="crudpago/pagar.php" method="POST">
    @csrf
        <div class="row">
            <div class="col">
            <center><h3 class="title">Formulario de Pago</h3></center>
            <br>
            <br>
                <h1 class="title">Datos Personales</h1>
                <div class="inputBox">
                    <span>Nombre Completo:</span>
                    <input type="text" name="nombre_completo" placeholder="Laura Rosario" required>
                </div>
                <div class="inputBox">
                    <span>Email:</span>
                    <input type="email" name="email" placeholder="ejemplo@ejemplo.com" required>
                </div>
                <div class="inputBox">
                    <span>Tipo del pago:</span>
                    <select name="tipo_pago">
                        <option value="transferencia">Transferencia</option>
                        <option value="efectivo">Efectivo</option>
                        <option value="tarjeta">Tarjeta</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Descripción del pago:</span>
                    <input type="text" name="descripcion" placeholder="Abono de ..." required>
                </div>
                <div class="inputBox">
                    <span>Monto:</span>
                    <input type="text" name="monto" placeholder="..." required>
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
                    <img src="imgtarjeta/card.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Nombre en la tarjeta:</span>
                    <input type="text" name="nombre_tarjeta" placeholder="Carlos Rodriguezb">
                </div>
                <div class="inputBox">
                    <span>Número de la Tarjeta de crédito:</span>
                    <input type="number" name="num_tarjeta" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>Mes de expiración:</span>
                    <input type="text" name="mes_expiracion" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Año de expiración:</span>
                        <input type="text" name="ano_expiracion" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV:</span>
                        <input type="text" name="cvv" placeholder="1234">
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="Haz tu pago" class="submit-btn">
    </form>
</div>

</body>
</html>
