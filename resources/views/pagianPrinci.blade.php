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
    background-color: #f3eae8;
    color: #4a5157;
    text-align: center;
    margin: 0;
    padding: 0;
}

p {
    font-size: 25px;
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
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.address, .hours {
    margin-bottom: 30px;
}

h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

p {
    font-size: 1em;
    margin: 5px 0;
}

.book-now {
    background-color: #103349;
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 1em;
    cursor: pointer;
    text-transform: uppercase;
}

.book-now:hover {
    background-color: #292b4b;
}

a{
    font-size: arial;
    color:white;
}
@media screen and (max-width: 768px) {
    /* Estilos específicos para pantallas pequeñas */
    .content h1 {
        font-size: 10vw; /* Tamaño de fuente para pantallas pequeñas */
    }
    button {
        font-size: 5vw; /* Tamaño de fuente del botón para pantallas pequeñas */
        padding: 2vw 4vw; /* Padding del botón para pantallas pequeñas */
    }
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

       <center> <h1>WELCOME TO D' antojitos</h1><br>
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
                <a href="{{route('registro')}}">Registrate</a>
            </div>
        </div>
    </section>
<br><br>
    <div class="container">
        <h1>Nuestra Ubicacion</h1>
        <div class="address">
            <h2>Direccion y telefono</h2>
            <p>Santiago,Republica Dominica, Carr.Punal</p>
            <p>(829) 622-356, (829) 208-3086</p>
        </div>
        <div class="hours">
            <h2>Horas</h2>
            <p>Lunes – Viernes: 8 am - 7 pm</p>
            <p>Sabados: 9 am - 7 pm</p>
        </div>
        <button class="book-now" href="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3750.2156553654054!2d-70.6595640225756!3d19.402230394124924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDI0JzA4LjAiTiA3MMKwMzknMjUuMiJX!5e0!3m2!1ses!2sdo!4v1717100614274!5m2!1ses!2sdo" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" >Mapa</button>
    </div>

    </body>
    <x-footer></x-footer>
</html>
