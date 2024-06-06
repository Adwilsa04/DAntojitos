<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra historia</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .header {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }

        .top-bar {
            background-color: #000; /* Color de fondo negro */
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .contact-info {
            margin-left: auto;
        }

        .contact-info a {
            margin: 0 10px;
            color: #fff; /* Color de las letras blanco */
            text-decoration: none;
        }

        .contact-info span {
            margin: 0 5px;
            color: #fff; /* Color de las letras blanco */
        }

        .social-icons {
            display: flex;
            align-items: center;
            margin-left: 20px;
        }

        .social-icons a {
            margin: 0 5px;
            color: #333;
            text-decoration: none;
            font-size: 1rem;
        }

        .logo {
            display: flex;
            flex-direction: column;
            text-align: left;
            align-items: flex-start; /* Alinear elementos a la izquierda */
        }

        .logo span {
            font-weight: bold;
            font-size: 1.5rem; /* Tamaño ajustado */
            color: #8B4513; /* Marrón claro */
        }

        .logo p {
            margin: 0; /* Ajustar el margen del párrafo */
            font-size: 0.9rem; /* Tamaño del párrafo */
            color: #333; /* Color del párrafo */
        }

        .navbar {
            background-color: #fff;
            padding: 10px 0;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between; /* Distribuir el espacio entre los elementos */
            align-items: center; /* Alinear elementos horizontalmente */
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #000; /* Color negro */
            font-weight: bold;
            padding: 15px 10px;
            display: block;
        }

        /* Icono de menú hamburguesa */
        .menu-icon {
            display: none;
            cursor: pointer;
            flex-direction: column;
            justify-content: space-around;
            width: 30px;
            height: 30px;
            margin-top: 10px;
        }

        .menu-icon div {
            width: 100%;
            height: 3px;
            background-color: #333;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                display: none;
                width: 100%;
                background-color: #fff;
                position: absolute;
                top: 60px;
                left: 0;
                border-top: 1px solid #ddd;
            }

            nav ul.active {
                display: flex;
            }

            nav ul li {
                margin: 0;
            }

            nav ul li a {
                padding: 10px;
                border-bottom: 1px solid #ddd;
            }

            .menu-icon {
                display: flex;
                position: absolute;
                right: 20px;
                top: 45px; /* Ajusta el margen superior del icono de hamburguesa */
            }

            .logo span {
                font-size: 1.2rem; /* Reduce el tamaño del nombre de la empresa */
                margin-right: 0; /* Elimina el espacio entre el nombre de la empresa y el menú */
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="top-bar">
            <div class="container">
                <div class="contact-info">
                    <a href="mailto:zorrillamaria48@gmail.com">zorrillamaria48@gmail.com</a>
                    <span>|</span>
                    <a href="tel:+18292083086">(829) 208-3086, (829) 6222-3556</a>
                </div>
            </div>
        </div>
        <div class="navbar">
            <div class="container">
                <div class="logo">
                    <span>D'antojitos Gourmet Decora</span>
                    <p>ALTA CALIDAD</p>
                </div>
                <div class="menu-icon">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <nav>
                    <ul>
                        <li><a href="{{route('volver')}}">INICIO</a></li>
                        <li><a href="{{route('pagservi')}}">SERVICIOS</a></li>
                        <li><a href="{{route('contacto')}}">CONTACTO</a></li>
                        <li><a href="{{route('perfil')}}">MI PERFIL</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <script>
        document.querySelector('.menu-icon').addEventListener('click', function() {
            this.classList.toggle('active');
            document.querySelector('nav ul').classList.toggle('active');
        });
    </script>
</body>
</html>
