<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('imagenes/Logo.ico')}}">
    <title>D'antojitos Gourmet Decora</title>
</head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap');

        *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}
.banner {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
}

.banner video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
    
}

.banner::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));
    z-index: 0;
}

.content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    color: white;
    text-align: center;
}

.navbar{
    width: 90%;
    padding: 30px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo{
    width: 160px;
    margin-top: -10px;
    cursor: pointer;
}
.navbar a:hover{
    color: black;
}

.content h1{
    font-family: 'Cinzel';
    margin-top: 80px;
    font-size: 90px;
    font-weight: 100;
    color: white;
}

button{
    font-family: 'Cinzel';
    width: 200px;
    padding: 15px;
    margin: 20px 5px;
    text-align: center;
    border-radius: 0;
    color:#ffffff;
    border: 2px;
    font-size: 20px;
    cursor: pointer;
    font-weight: 600;
    position: left;
	background-color: transparent ;
	display: inline-block;
	padding: 1rem 3rem;
	border: 1px solid #ffffff;
}


button:hover{
    background: #000000;
    transition: 0.5s;
}
button:hover{
    color: rgb(255, 255, 255);
}
.banner video {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    min-height: 100%;
    z-index: -1;
}

@media(min-aspect-ratio: 16/9){
    .banner video{
        width: 100%;
        height: auto;
    }
}

/*aqui comienza la galeria de imagenes y el body */
body {
    font-family: Arial, sans-serif;
    background-color: white;
    color: #4a5157;
    text-align: center;
    margin: 0;
    padding: 0;
}

p {
    font-size: 20px;
    margin:justify;

}

.gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0; /* Elimina el espacio entre los elementos para unificar los bordes */
    padding: 0;
}

.gallery-item {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 300px;  /* Ajustado para una mejor visualización */
    background-color: #1f1f1f;  /* Fondo oscuro similar al estilo de la imagen */
    overflow: hidden;
    border: 0px  #f8efed;  /* Añadir borde para unificar los bordes */
    box-sizing: border-box;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.text-item {
    background-color: #333;  /* Color de fondo oscuro */
    color: #f3eae8;
    font-size: 1.2em;
    text-align: center;
    position: relative;
    border: 0px solid #f8efed;  /* Añadir borde para unificar los bordes */
    box-sizing: border-box;
}

.text-content {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.text-content img {
    width: 50px;  /* Tamaño del icono ajustado */
    height: auto;
    margin-bottom: 10px;
}

.text-content p {
    margin: 0;
    font-size: 1.2em;
}

/* nuestra ubi*/
* {
            margin: 0;
            padding: 0;
            font-family: 'Cinzel', sans-serif;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: #4a5157;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .info-section {
            margin-bottom: 30px;
            width: 100%;
            text-align: center;
        }

        h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .info-section p {
            font-size: 1em;
            margin: 10px 0;
            text-align: center;
        }

        .book-now {
            background-color: #8B0000;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 1em;
            cursor: pointer;
            text-transform: uppercase;
            margin-top: 20px;
        }

        .book-now:hover {
            background-color: #000;
        }

        a {
            font-size: arial;
            color: white;
            text-decoration: none;
        }

        @media screen and (max-width: 768px) {
            h1 {
                font-size: 2em;
            }

            h2 {
                font-size: 1.3em;
            }

            .info-section p {
                font-size: 0.9em;
            }

            .book-now {
                padding: 10px 20px;
                font-size: 0.9em;
            }
        }
/*codigos de la alerta */
body {
    font-family: Arial, sans-serif;
}

.alert-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    max-width: 400px;
    z-index: 1000;
}

.alert-content {
    background-color: #2a4a46;
    color: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    position: relative;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    color: white;
    font-size: 24px;
    cursor: pointer;
}

.alert-content h2 {
    margin-top: 0;
}

.alert-content p {
    margin: 10px 0;
}

.alert-content .btn-register,
.alert-content button {
    display: block;
    width: calc(100% - 20px);
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: none;
    background-color: #56b68b;
    color: white;
    cursor: pointer;
    font-size: 16px;
    text-decoration: none;
    text-align: center;
}



    </style>
<x-index></x-index>
<br>
<br>
<br>
<br>

    <body>
        
        <div class="banner">
            <video autoplay loop muted plays-inline>
                <source src="{{asset('video/Video.mp4')}}" type="video/mp4">
            </video>

        
            <div class="content">
                <h1>D' antojitos Gourmet Decora</h1>
                <div>
                    <button type="button"> <a href="{{route('pagservi')}}" style="text-decoration:none; color:white;"> Ver más</a></button> 

                <a class="nav-link scroll to" href="{{route('pagservi')}}">      
                </a>

                    <a class="nav-link scrollto" href="{{route('pagservi')}}">
                        </a>
                </div>
            </div>
        </div>
<br>
<br>

       <center> <h1>Bienvenidos a D' antojitos</h1><br>
     <p> Nos enorgullece ofrecer una experiencia gastronómica y decorativa inigualable para sus eventos más especiales. 
       Con un compromiso inquebrantable con la excelencia, nuestro equipo de expertos culinarios y diseñadores de eventos 
       trabaja meticulosamente para crear ambientes elegantes y menús exquisitos que deleitan los sentidos. Ya sea un íntimo encuentro familiar, 
       una celebración corporativa o una majestuosa boda.
       </p><br>
       <p>nos dedicamos a transformar sus sueños en realidad, 
       cuidando cada detalle para garantizar que su ocasión sea memorable y distintiva. Bienvenidos a un mundo de sofisticación y buen gusto, 
       donde cada evento es una obra maestra y cada invitado se siente especial.</p>
  </center><br><br><br><br>
    <section class="gallery">
        <div class="gallery-item image-item"><img src="imagenes/deco1.jpg" alt="Image 1"></div>
        <div class="gallery-item text-item">
            <div class="text-content">
                <img src="imagenes/icono.png" alt="Icon 1">
               <a href="{{route('contacto')}}">Contactos</a>
            </div>
        </div>
        <div class="gallery-item image-item"><img src="imagenes/img4.jpg" alt="Image 2"></div>
        <div class="gallery-item text-item">
            <div class="text-content">
                <img src="imagenes/icono4.png" alt="Icon 2">
                <a href="{{route('nosotros')}}">Nosotros</a>
            </div>
        </div>
        <div class="gallery-item image-item"><img src="imagenes/img2.jpg" alt="Image 3"></div>
        <div class="gallery-item text-item">
            <div class="text-content">
                <img src="imagenes/icono2.png" alt="Icon 3">
                <a href="{{route('registrate')}}">Registrate</a>
            </div>
        </div>
    </section>
<br><br>
    <div class="container">
        <h1>Nuestra Ubicación</h1>
        <div class="address">
            <h2>Dirección y teléfono</h2>
            <p1>Santiago, República Dominica, Carr.Puñal</p1>
            <p2>(829) 622-356, (829) 208-3086</p2>
        </div>
        <div class="hours">
            <h2>Horas</h2>
            <p3>Lunes – Viernes: 8 am - 7 pm</p3>
            <p4>Sábados: 9 am - 7 pm</p4>
        </div>
        <button class="book-now"><a href="{{route('contacto')}}">Mapa</a></button>
    </div>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIP Alert</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="alert-container" id="vipAlert">
        <div class="alert-content">
            <span class="close-btn" onclick="closeAlert()">&times;</span>
            <h2>REGÍSTRATE</h2>
            <p>Por favor, regístrate para acceder a todas las funciones de la aplicación.</p>
            <button onclick="redirectToRegister()">REGISTRARME</button>
        </div>
    </div>

    <script>
        function closeAlert() {
            document.getElementById('vipAlert').style.display = 'none';
        }

        function redirectToRegister() {
            window.location.href = "{{ route('registrate') }}";
        }
    </script>
</body>
</html>

    </body>
    <x-footer></x-footer>
</html>
