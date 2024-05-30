<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Portafolio de Decoracion</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<style>
  @import url("https://fonts.googleapis.com/css?family=Arvo");
body,
html {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  width: 100%;
  height: 100%;
  background: #f5f4f4;
  font-size: 13px;
  font-family: "Arvo", monospace;
}
@supports (display: grid) {
  body,
html {
    display: block;
  }
}

.message {
  border: 1px solid #d2d0d0;
  padding: 2em;
  font-size: 1.7vw;
  box-shadow: -2px 2px 10px 0px rgba(68, 68, 68, 0.4);
}
@supports (display: grid) {
  .message {
    display: none;
  }
}

.section {
  display: none;
  padding: 2rem;
}
@media screen and (min-width: 768px) {
  .section {
    padding: 4rem;
  }
}
@supports (display: grid) {
  .section {
    display: block;
  }
}

h1 {
  font-size: 2rem;
  margin: 0 0 1.5em;
}

.grid {
  display: grid;
  grid-gap: 30px;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  grid-auto-rows: 150px;
  grid-auto-flow: row dense;
}

.item {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  box-sizing: border-box;
  background: #0c9a9a;
  color: #fff;
  grid-column-start: auto;
  grid-row-start: auto;
  color: #fff;
  background: url("imagenes/deco5.jpg");
  background-size: cover;
  background-position: center;
  box-shadow: -2px 2px 10px 0px rgba(68, 68, 68, 0.4);
  transition: transform 0.3s ease-in-out;
  cursor: pointer;
  counter-increment: item-counter;
}
.item:nth-of-type(3n) {
  background-image: url("imagenes/deco3.jpg");
}
.item:nth-of-type(4n) {
  background-image: url("imagenes/deco2.jpg");
}
.item:nth-of-type(5n) {
  background-image: url("imagenes/deco1.jpg");
}
.item:nth-of-type(6n) {
  background-image: url("imagenes/deco4.jpg");
}
.item:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: black;
  opacity: 0.3;
  transition: opacity 0.3s ease-in-out;
}
.item:hover {
  transform: scale(1.05);
}
.item:hover:after {
  opacity: 0;
}
.item--medium {
  grid-row-end: span 2;
}
.item--large {
  grid-row-end: span 3;
}
.item--full {
  grid-column-end: auto;
}
@media screen and (min-width: 768px) {
  .item--full {
    grid-column: 1/-1;
    grid-row-end: span 2;
  }
}
.item__details {
  position: relative;
  z-index: 1;
  padding: 15px;
  color: #444;
  background: #fff;
  text-transform: lowercase;
  letter-spacing: 1px;
  color: #828282;
}
.item__details:before {
  content: counter(item-counter);
  font-weight: bold;
  font-size: 1.1rem;
  padding-right: 0.5em;
  color: #444;
}

/* Estilos para el cuadro de información */
.info-card {
            background-color: #f5f5f5;
            padding: 30px;
            border-radius: 8 px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 18px;
        }

        /* Estilos para el botón */
        .btn-reserva {
            background-color: black;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-reserva:hover {
            background-color: red;
        }
</style>
<x-index></x-index>
<body>
<!-- partial:index.partial.html -->
<div class="message">
  Sorry, your browser does not support CSS Grid. 😅
</div>
<br><br><br><br><br><br>
<section class="section">
  <center><h1>EDITORIAL</h1></center>
  <br><br>
    <div class="info-card">
        <p>Si deseas realizar este pedido, comunícate con nosotros vía WhatsApp y reserva tu cita para conocer más detalles de tus gustos y estilos preferidos.</p>
        <br><button class="btn-reserva" href="{{route('cita')}}" >Reserva tu cita aquí</button>
    </div><br><br>
  <div class="grid">
    <div class="item">
      <div class="item__details">
      Fiesta Estilo Elefante
      </div>
    </div>
    <div class="item item--large">
      <div class="item__details">
      Fiesta Estilo Elefante
      </div>
    </div>
    <div class="item item--medium">
      <div class="item__details">
      Fiesta Estilo Baquero
      </div>
    </div>
    <div class="item item--large">
      <div class="item__details">
       Fiesta Estilo Arcoiris
      </div>
    </div>
    <div class="item item--full">
      <div class="item__details">
        Fiesta Estilo Vintage
      </div>
    </div>
    <div class="item item--medium">
      <div class="item__details">
      Boda Estilo Vintage Moderno
      </div>
    </div>
    <div class="item item--large">
      <div class="item__details">
      Fiesta Estilo Elefante
      </div>
    </div>
    <div class="item">
      <div class="item__details">
      Fiesta Estilo Arcoiris
      </div>
    </div>
    <div class="item item--medium">
      <div class="item__details">
      Fiesta Estilo Baquero
      </div>
    </div>
    <div class="item item--large">
      <div class="item__details">
      Fiesta Estilo Vintage 
      </div>
    </div>
    <div class="item">
      <div class="item__details">
      Fiesta Estilo Elefante
      </div>
    </div>
    <div class="item item--medium">
      <div class="item__details">
      Boda Estilo Vintage Moderno
      </div>
    </div>
   
    <div class="item">
      <div class="item__details">
     Fiesta Estilo Vintage 
      </div>
    </div>
  </div>
</div>
<!-- partial -->


<br><br><br>
  <x-footer></x-footer>
</body>
</html>