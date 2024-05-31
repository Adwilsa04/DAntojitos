<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto y FAQs</title>
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
        }

        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Esto asegura que la imagen cubra todo el contenedor */
            object-position: center; /* Centra la imagen dentro del contenedor */
        }

        .faqs {
            padding: 50px;
            text-align: center;
        }

        .faqs h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .faqs p {
            font-size: 1.2em;
            color: #666;
        }

        .contact-section {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: wrap;
            padding: 20px;
        }

        .contact-container,
        .map-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 45%;
            margin: 20px;
            box-sizing: border-box;
        }

        .contact-item {
            margin: 10px 0;
            font-size: 18px;
        }

        .contact-item i {
            margin-right: 10px;
            color: #333;
        }

        .contact-item a {
            color: #333;
            text-decoration: none;
        }

        .contact-item a:hover {
            text-decoration: underline;
        }

        iframe {
            width: 100%;
            height: 450px;
            border: 0;
        }

        .contact-form {
            margin-top: 20px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Add this */
        }

        .contact-form button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%; /* Add this to make button full width */
            box-sizing: border-box; /* Add this */
        }

        .contact-form button:hover {
            background-color: #555;
        }

        @media (max-width: 768px) {
            .contact-container,
            .map-container {
                width: 100%;
                height: auto; /* Change height to auto to ensure it adjusts to content */
            }

            .contact-form button {
                width: 100%; /* Ensure button remains full width on smaller screens */
            }
        }
    </style>
</head>
<body>
<x-index></x-index>
    <main>
        <section class="hero">
            <img src="imagenes/img9.jpg" alt="Imagen descriptiva"> <!-- Replace with your image URL -->
        </section>
        <section class="faqs">
            <h2>Contactanos</h2>
            <p>Transforma tus eventos en experiencias inolvidables con nuestro exquisito buffet, elegantes picaderas y deslumbrantes decoraciones.
                Nos apasiona crear momentos únicos y personalizados para cada ocasión. 
                Contáctanos hoy mismo y descubre cómo podemos hacer realidad la celebración de tus sueños.</p>
        </section>
        <section class="contact-section">
            <div class="contact-container">
                <h1>Contáctanos</h1>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i> <a href="mailto:zorrillamaria48@gmail.com">zorrillamaria48@gmail.com</a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i> <a href="tel:+1234567890">(829) 622-3556, (829) 208-3086</a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i> Dirección: carretera Punal, Santiago de los Caballeros, República Dominicana
                </div>
                <div class="contact-form">
                    <h2>Envíanos un mensaje</h2>
                    <form>
                        <input type="text" name="name" placeholder="Nombre" required>
                        <input type="email" name="email" placeholder="Correo electrónico" required>
                        <textarea name="message" rows="4" placeholder="Mensaje" required></textarea>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
            <div id="map" class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3750.2156553654054!2d-70.6595640225756!3d19.402230394124924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDI0JzA4LjAiTiA3MMKwMzknMjUuMiJX!5e0!3m2!1ses!2sdo!4v1717100614274!5m2!1ses!2sdo" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
</body>
</html>


