<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra historia</title>
    <!-- Incluyendo la fuente Montserrat desde Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Estilos específicos para el menú */
        .menu-container {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            font-size: 1em;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .menu-container .container {
            width: 100%;
            padding: 20px;
        }

        .menu-container .header {
            margin-bottom: 40px;
        }

        .menu-container .header h1 {
            font-size: 2em;
            margin: 0;
        }

        .menu-container .header p {
            font-size: 1em;
            margin: 10px 0 20px;
        }

        .menu-container .header a {
            text-decoration: none;
            color: #fff;
            background-color: #333;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .menu-container .gallery-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-bottom: 20px;
            opacity: 0; /* Inicialmente, la galería es invisible */
            transition: opacity 0.5s ease; /* Agregar una transición de opacidad */
        }

        .menu-container .gallery {
            display: flex;
            justify-content: center;
            gap: 10px;
            max-width: 90%; /* Ancho máximo de la galería */
        }

        .menu-container .gallery img {
            width: 250px; /* Tamaño de las imágenes */
            height: auto; /* Mantener la proporción de aspecto */
            border-radius: 5px;
            opacity: 0; /* Inicialmente, las imágenes son invisibles */
            transition: opacity 1s ease; /* Agregar una transición de opacidad */
        }

        .menu-container .text {
            font-size: 1em;
            line-height: 1.6;
            margin-bottom: 20px;
            width: 100%; /* Ocupar toda la pantalla horizontalmente */
            text-align: justify;
        }

        .menu-container .text a {
            text-decoration: none;
            color: #fff;
            background-color: #333;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }
    </style>
</head>
<x-index></x-index>
<body>
    <div class="menu-container">
        <div class="container">
            <div class="header">
                <h1>NUESTRA HISTORIA</h1>
                <p>Bienvenidos a D'antojitos Gourmet Decora. Somos una empresa dedicada a brindar servicios excepcionales de buffet, 
                    decoración y picadera para todo tipo de eventos. Fundada con la misión de convertir cada celebración 
                    en una experiencia única, trabajamos con pasión y creatividad para ofrecer productos de alta calidad 
                    y una presentación impecable. </p>
                
                <p>Nos enorgullece utilizar ingredientes frescos y de primera, 
                    así como diseñar decoraciones que transforman cualquier espacio en un ambiente mágico. En D'antojitos Gourmet Decora, 
                    tu satisfacción es nuestra prioridad y nos esforzamos para superar tus expectativas en cada detalle.</p>
            
                    <div class="gallery-container" id="gallery">
        <div class="gallery">
            <img src="imagenes/deco7.jpg" alt="Image 1">
            <img src="imagenes/img2.jpg" alt="Image 2">
            <img src="imagenes/img3.jpg" alt="Image 3">
            <img src="imagenes/deco5.jpg" alt="Image 4">
        </div>
    </div>

    <div class="text">
        <p>Nos sentimos agradecidos y orgullosos de que quieras trabajar con nosotros, contacta con nosotros y reserva una cita para concer tus gustos 
            y realizar tus pedidos con mayor personalizacion y delicadeza.</p>
        <a href="{{route('cita')}}">Reserva tu cita</a>
    </div>

    <script>
        // Función para mostrar la galería cuando se hace scroll hacia abajo
        function showGallery(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1"; // Cambiar la opacidad a 1 cuando es visible
                    entry.target.querySelectorAll('img').forEach(img => {
                        img.style.opacity = "1"; // Cambiar la opacidad de las imágenes a 1
                    });
                    observer.unobserve(entry.target); // Dejar de observar una vez que se ha mostrado
                }
            });
        }

        // Crear un observador de intersección
        const observer = new IntersectionObserver(showGallery, {
            root: null,
            threshold: 0.2 // Se activará cuando el 20% del elemento sea visible
        });

        // Observar el contenedor de la galería
        observer.observe(document.getElementById('gallery'));
    </script>
            
            
                </div>
        </div>
    </div>

    <x-footer></x-footer>
</body>
</html>
