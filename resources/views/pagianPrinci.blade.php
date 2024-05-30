<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>D'antojitos Gourmet Decora</title>
</head>
<head>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>D' antojitos Gourmet Decora</title>
        <link rel="icon" type="image/x-icon" href="{{asset('imagenes/Logo.ico')}}">
    </head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap');


        *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}
.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.40),rgba(0,0,0,0.40));
    background-position: center;
    background-size: center;
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
.content{
    width: 100%;
    position: absolute;
    color: white;
    top: 45%;
    transform: translateY(-50%);
    text-align: center;
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
.banner video{
    position: absolute;
    right: 0;
    bottom: 0;
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
    background-color: #f8efed;
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
    background-color: #5a6e5d;
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 1em;
    cursor: pointer;
    text-transform: uppercase;
}

.book-now:hover {
    background-color: #4d5d4f;
}


    </style>
  <x-index></x-index>


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
<br>
<br>

       <center> <h1>WELCOME TO D' antojitos</h1><br>
        <p>Tucked away on charming Queen Street, Poogan’s Porch is Charleston’s oldest independent culinary establishment, </p>
           <p> with a fresh approach to Lowcountry cuisine. Recognized by Martha Stewart Living, Southern Living and The </p>
           <p>Travel Channel among many others, this beautifully restored Victorian house is the perfect southern spot for </p>
           <p>daily brunch and dinner.</p>
  </center><br><br><br><br>
    <section class="gallery">
        <div class="gallery-item image-item"><img src="imagenes/deco1.jpg" alt="Image 1"></div>
        <div class="gallery-item text-item">
            <div class="text-content">
                <!--<img src="icon1.png" alt="Icon 1">-->
                <p>OUR MENUS</p>
            </div>
        </div>
        <div class="gallery-item image-item"><img src="imagenes/deco1.jpg" alt="Image 2"></div>
        <div class="gallery-item text-item">
            <div class="text-content">
                <!--<img src="icon2.png" alt="Icon 2">-->
                <p>ABOUT US</p>
            </div>
        </div>
        <div class="gallery-item image-item"><img src="imagenes/deco2.jpg" alt="Image 3"></div>
        <div class="gallery-item text-item">
            <div class="text-content">
                <!--<img src="icon3.png" alt="Icon 3">-->
                <p>CAREERS</p>
            </div>
        </div>
    </section>
<br><br>
    <div class="container">
        <h1>Nuestra Ubicacion</h1>
        <div class="address">
            <h2>Direccion y telefono</h2>
            <p>Santiago,Republica Dominica, Carr.Punal</p>
            <p>(829) 622-356, </p>
        </div>
        <div class="hours">
            <h2>Horas</h2>
            <p>Lunes – Viernes: 8 am - 7 pm</p>
            <p>Sabados: 9 am - 7 pm</p>
        </div>
        <button class="book-now">Mapa</button>
    </div>

    </body>
    <x-footer></x-footer>
</html>
