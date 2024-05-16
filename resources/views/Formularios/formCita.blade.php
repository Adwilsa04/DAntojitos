@extends()

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cita</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="imagenes/Logo.ico">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<head>
    <style>

 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: white;

    font-family: Arial, Helvetica, sans-serif;
}

.wrapper {
    background-color: #fff;
    width: 530px;
    padding: 25px;
    margin: 25px auto 0;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
}

.wrapper h2 {
    background-color: #fcfcfc;
    color: red;
    font-size: 24px;
    padding: 10px;
    margin-bottom: 8px;
    text-align: center;
    border: 1px dashed red;
}

.wrapper h4 {
    padding-bottom: 5px;
    color: red;
}

.input_group {
    margin-bottom: 8px;
    width: 465px;
    position: relative;
    display: flex;
    flex-direction: row;
    padding: 5px 0;
}

.input_box {
    width: 100%;
    margin-right: 8px;
    position: relative;
   
}

.input_pago{
    width: 465px;
    margin-right: 8px;
    position: relative;
}

.input_pago:last-child {
    margin-right: 0;
}

.input_pago .name {
    padding: 14px 10px 14px 50px;
    width: 100%;
    background-color: #fcfcfc;
    border: 1px solid #0003;
    outline: none;
    letter-spacing: 1px;
    transition: 0.3s;
    border-radius: 3px;
    color: #333;
}

.input_pago .name:focus, .dob:focus {
    -webkit-box-shadow: 0 0 2px 1px ;
    -moz-box-shadow: 0 0 2px 1px black;
    box-shadow: 0 0 2px 1px ;
    border: 1px solid ;
}

.input_pago .icon {
    width: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0px;
    color: black;
    background-color: #f1f1f1;
    border-radius: 2px 0 0 2px;
    transition: 0.3s;
    font-size: 20px;
    pointer-events: none;
    border: 1px solid #00000003;
    border-right: none;
}


.input_box:last-child {
    margin-right: 0;
}

.input_box .name {
    padding: 14px 10px 14px 50px;
    width: 100%;
    background-color: #fcfcfc;
    border: 1px solid #0003;
    outline: none;
    letter-spacing: 1px;
    transition: 0.3s;
    border-radius: 3px;
    color: #333;
}

.input_box .name:focus, .dob:focus {
    -webkit-box-shadow: 0 0 2px 1px ;
    -moz-box-shadow: 0 0 2px 1px black;
    box-shadow: 0 0 2px 1px black;
    border: 1px solid black;
}

.input_box .icon {
    width: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0px;
    color: #333;
    background-color: #f1f1f1;
    border-radius: 2px 0 0 2px;
    transition: 0.3s;
    font-size: 20px;
    pointer-events: none;
    border: 1px solid #00000003;
    border-right: none;
}

.name:focus+.icon {
    background-color: black;
    color: #fff;
    border-right: 1px solid #21cdd3;
    border: none;
    transition: 1s;
}

.dob {
    width: 30%;
    padding: 14px;
    text-align: center;
    background-color: #fcfcfc;
    transition: 0.3s;
    outline: none;
    border: 1px solid #c0bfbf;
    border-radius: 3px;
}

.radio {
    display: none;
}

.input_box label {
    width: 60%;
    padding: 13px;
    background-color: #fcfcfc;
    display: inline-block;
    float: left;
    text-align: center;
    border: 1px solid #c0bfbf;
}

.input_box label:first-of-type {
    border-top-left-radius: 3px;
    border-bottom-right-radius: 3px;
    border-right: none;
}

.input_box label:last-of-type {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}

.radio:checked+label {
    background-color: #21cdd3;
    color: #fff;
    transition: 0.5s;
}

.input_box button {
    width: 100%;
    background-color: red;
    border: none;
    color: #fff;
    padding: 15px;
    border-right: 4px;
    font-size: 16px;
    transition: all 0.3s ease;
    border-radius: 8px;
}

.input_box button:hover {
    cursor: pointer;
    background-color: black;
}
        
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Reserva tu cita !!!</h2>
        <form action="InsertCita/insertar.php" method="post">            
            <!--Account Information Start-->
            <h4>Cuenta</h4>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="nombre" placeholder="Nombre cliente" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="email" name="email" placeholder="Email Address" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="direccion" placeholder="Lugar de encuentro" required class="name">
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="ciudad" placeholder="Ciudad" required class="name">
                    <i class="fa fa-institution icon"></i>
                </div>
            </div>

            <div class="input_group">
                <div class="input_box">
                    <div class="input_box">
                        <input type="number" name="fecha" placeholder="0000/00/00" required class="name">
                        <i class="fa fa-calendar icon" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="input_box">
                    <input type="time" name="hora" placeholder="Hora cita" required class="name">
                    <i class="fa fa-calendar-o icon" ></i>
                </div>
            </div>
            <!--Account Information End-->


            <!--detalle de pago-->
            <div class="input_group">
                <div class="input_box">
                    <h4>Detalle de pago Cita</h4>
                    <input type="" name="pay" class="radio" id="bc1" checked>
                    
                    <input type="" name="pay" class="radio" id="bc2">
                    <label for="bc2"><span>
                            <i class="fa fa-cc-paypal"></i>Banco Santa Cruz - D'antojitos</span></label>
                </div>
            </div>
             <!--fianl detalle de pago-->

            <div class="input_group">
                <div class="input_box">
                    <input type="" class="name" placeholder="Numero de Cuenta 1111-2222-3333-4444" checked>
                    <span><i class="fa fa-credit-card icon"></i></span>
                </div>
            </div>
           
            
            <div class="input_pago">
                <input type="" placeholder="Cantidad a pagar RD$ 500.00" class="name">
                <i class="fa fa-money icon" ></i>
            </div>
            <!--final de detalle de pago-->
         <br>
            <center>
             <div class="input_group">
                <div class="input_box">
                    <button type="submit">RESERVAR</button>
                </div>
            </div>
            </center>
        </form>
    

</body>

</html>
        