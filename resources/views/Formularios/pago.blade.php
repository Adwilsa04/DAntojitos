<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pago</title>
    <link rel="icon" type="image/x-icon" href="{{asset('imagenes/Logo.ico')}}">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-transform: capitalize;
        transition: all .2s linear;
    }

    link[rel="icon"] {
        background-image: url('imagenes/Logo.ico');
    }

    .container {
        padding: 25px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    .container form {
        width: 100%;
        max-width: 700px;
        margin: 0 auto;
        padding: 20px;
        background: #fff;
        border: 3px solid #ccc;
        border-radius: 10px;
    }

    .container form .row {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .container form .row .col {
        flex: 1 1 100%;
    }

    .container form .row .col .title {
        font-size: 25px;
        color: #8B0000;
        padding-bottom: 5px;
    }

    .container form .row .col .inputBox {
        margin: 15px 0;
    }

    .container form .row .col .inputBox span {
        margin-bottom: 10px;
        display: block;
    }

    .container form .row .col .inputBox input,
    .container form .row .col .inputBox select {
        width: calc(100% - 30px);
        border: 1px solid #ccc;
        padding: 10px 15px;
        font-size: 15px;
        text-transform: none;
        border-radius: 5px;
    }

    .container form .row .col .inputBox input:focus,
    .container form .row .col .inputBox select:focus {
        border: 1px solid #000;
    }

    .container form .submit-btn {
        width: 100%;
        text-decoration: none;
        text-align: center;
        color: #ffff;
        background-color: transparent;
        display: inline-block;
        padding: 1rem;
        text-transform: uppercase;
        border-radius: 5px;
        background: #8B0000;
    }

    .container form .submit-btn:hover {
        background: #000000;
        color: #dcdcdc;
    }
</style>

<body>
    <div class="container">
        <form action="{{ route('pagar.store') }}" method="POST">
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
                        <input type="text" id="total" name="monto" placeholder="..." required readonly>
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
                        <span>Tarjetas aceptadas :</span>
                        <img src="imgtarjeta/card.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>Nombre en la tarjeta:</span>
                        <input type="text" name="nombre_tarjeta" placeholder="Carlos Rodriguez">
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
            <input type="submit" value="Haz tu pago" class="submit-btn" href="{{ route('Confirmación') }}">
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const total = localStorage.getItem("cartTotal");
            if (total) {
                document.getElementById("total").value = `$ ${total}.00`;
            }
        });
    </script>
</body>
</html>
