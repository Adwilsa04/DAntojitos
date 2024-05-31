<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Historia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{asset('imagenes/Logo.ico')}}">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #333;
            padding: 10px 0;
        }

        header nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header nav ul li {
            display: inline;
            margin: 0 15px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .hero {
            width: 100%;
            height: 400px;
            overflow: hidden;
            position: relative;
            text-align: center;
            color: white;
        }

        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .hero h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2em;
            padding: 20px;
            border-radius: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .container {
            display: flex;
            width: 100vw; /* Ocupar todo el ancho del viewport */
            height: 400px; /* Ajustar la altura según sea necesario */
            margin: 0; /* Eliminar márgenes */
            background-color: #333;
            color: #fff;
            border-radius: 15px;
            overflow: hidden;
        }

        .image-container, .text-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%; /* Ajustar la altura según sea necesario */
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: 5px solid #f5f5f5;
        }

        .text-container {
            padding: 20px;
            background-color: #d3d3d3; /* Cambia a un gris suave */
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: left;
        }

        .text-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .text-container p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .text-container .artist {
            font-size: 14px;
            margin-top: 20px;
        }

        .text-container a {
            color: #ffa500;
            text-decoration: none;
        }

        .text-container a:hover {
            text-decoration: underline;
        }

        .title {
            color: #ffcba9;
            font-size: 2em;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                height: auto;
            }

            .image-container, .text-container {
                width: 100%;
                height: auto;
            }

            .image-container img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        }
    </style>
</head>
<body>
    <x-index></x-index>
    <main>
        <section class="hero">
            <img src="imagenes/deco7.jpg" alt="Imagen descriptiva">
            <h1>OUR STORY</h1>
        </section>
    </main>
    <br><br>
    <div class="container">
        <div class="image-container">
            <img src="imagenes/img12.jpg" alt="Portrait of Poogan">
        </div>
        <div class="text-container">
            <h1>HOW WE GOT OUR NAME</h1>
            <p>From the moment you step into the parlor of Poogan’s Porch, there is a pervasive sense of history: the knotted heart-of-pine floors.</p>
            <p>Poogan’s Porch was originally a spacious, commodious home, erected in 1891. By 1976, the character of the neighborhood had changed suitably to allow for the conversion of t</p>
            <p class="artist">Poogan's Portrait Artist: Jordan Cave (www.jordancavestudio.com)</p>
        </div>
    </div>
</body>
</html>
