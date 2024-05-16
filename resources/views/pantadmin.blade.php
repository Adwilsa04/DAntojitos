<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gestor de Administrador</title>
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
body, html {
    height: 100%;
    margin: 0;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    height: 100%;
}

.image-box {
    position: relative;
    width: 300px;
    text-align: center;
    margin: 20px; 
}

img {
    width: 100%;
}

.label {
    position: absolute;
    bottom: 150px; 
    left: 0;
    right: 0;
    font-size: 40px;
    font-family: 'Cinzel';
    color: #fff;
}

button {
    position: absolute;
    bottom: 50px;
    left: 50%;
    transform: translateX(-50%);
    padding: 10px 20px;
    background-color: #f12f1f;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 20px;
    font-family: 'Cinzel';
}

button:hover{
    color: #fff;
    background-color: black;
    transition: 0.5s;
}

h1{
    font-family: 'Cinzel';
    text-align: center;
}

h3{
    font-family: 'Poppins';
    text-align: center;
}

footer{
	font-family: arial;
}



</style>

<body>
<x-index></x-index>
<br><br><br><br><br><br><br>
<h1>Gestión de registros</h1>
<br>
<h3>Selecciona el área que desea gestionar</h3>
<div class="container">
    <div class="image-box">
        <img src="{{asset('imagenes/img3.jpg')}}" alt="Image 1">
        <div class="label">Pedidos</div>
        <button class="button">Gestionar</button>
    </div>
    <div class="image-box">
        <img src="{{asset('imagenes/img2.jpg')}}" alt="Image 2">
        <div class="label">Citas</div>
        <button class="button">Gestionar</button>
    </div>
    <div class="image-box">
        <img src="{{asset('imagenes/img1.jpg')}}" alt="Image 3">
        <div class="label">Usuarios</div>
        <button class="button">Gestionar</button>
    </div>
</div>
<br>

</body>
<x-footer></x-footer>
</html>
