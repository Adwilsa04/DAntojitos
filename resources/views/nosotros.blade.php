<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Historia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
            height: 400px; /* Establecer la altura fija del contenedor */
            overflow: hidden; /* Asegura que cualquier parte de la imagen que se salga del cuadro sea recortada */
            position: relative;
            text-align: center; /* Centrar el contenido */
            color: white;
        }

        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Esto asegura que la imagen cubra todo el contenedor */
            object-position: center; /* Centra la imagen dentro del contenedor */
        }

        .hero h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 3em;
            /* background: rgba(0, 0, 0, 0.5); Fondo semitransparente removido */
            padding: 20px;
            border-radius: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Añadir sombra al texto para mejorar la legibilidad */
        }

        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

.container {
    display: flex;
    max-width: 1200px;
    margin: 0 auto;
    background-color: #333;
    color: #fff;
}

.image-container {
    flex: 1;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.image-container img {
    max-width: 100%;
    height: auto;
    border: 10px solid #f5f5f5;
}

.text-container {
    flex: 2;
    padding: 20px;
    border-left: 1px solid #444;
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

    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Menus</a></li>
                <li><a href="#">Gift Cards</a></li>
                <li><a href="#">Reservations</a></li>
                <li><a href="#">Contact & FAQs</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <img src="imagenes/deco2.jpg" alt="Imagen descriptiva"> <!-- Reemplaza con la URL de tu imagen -->
            <h1>OUR STORY</h1>
        </section>
    </main>
<br><br>
    <center><section class="faqs">
            <h2>Contactanos</h2>
            <p>Transforma tus eventos en experiencias inolvidables con nuestro exquisito buffet, 
                elegantes picaderas y deslumbrantes decoraciones. Nos apasiona crear momentos únicos 
                y personalizados para cada ocasión. Contáctanos hoy mismo y descubre cómo 
                podemos hacer realidad la celebración de tus sueños.</p>
        </section></center><br><br>

    <div class="container">
        <div class="image-container">
            <img src="imagenes/deco2.jpg" alt="Portrait of Poogan">
        </div>
        <div class="text-container">
            <h1>HOW WE GOT OUR NAME</h1>
            <p>From the moment you step into the parlor of Poogan’s Porch, there is a pervasive sense of history: the knotted heart-of-pine floors, the dual staircases, and of course, the first and second-story porches all reflect the Charleston of days gone by.</p>
            <p>Poogan’s Porch was originally a spacious, commodious home, erected in 1891. By 1976, the character of the neighborhood had changed suitably to allow for the conversion of the house into a restaurant. The last residential owners of the site sold their home and moved away, leaving behind the neighborhood dog that they had grown so accustomed to caring for over the years.</p>
            <p class="artist">Poogan’s Portrait Artist: Jordan Cave (<a href="http://www.jordancavestudio.com">www.jordancavestudio.com</a>)</p>
        </div>
    </div>


</body>
</html>

