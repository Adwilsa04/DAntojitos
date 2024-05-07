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
                    </select>
                </div>
                <div class="inputBox">
                    <span>Descripción del pago:</span>
                    <input type="text" placeholder="...">
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
                    <input type="text" placeholder="Santa Cruz">
                </div>
                <div class="inputBox">
                    <span>Cuenta de Banco:</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>Nombre de la cuenta de Banco:</span>
                    <input type="text" placeholder="Nombre destinado ">
                </div>
            </div>
        </div>
        <input type="submit" value="proceed to checkout" class="submit-btn">
    </form>
</div>

</body>
</html>
