<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Fijo Minimalista</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
body {
    font-family: 'Helvetica Neue', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
}

.fixed-navbar {
    background-color: #000;
    border-bottom: 1px solid #ddd;
    padding: 20px 0;  /* Aumentado el padding para hacer el menú más ancho */
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}

.fixed-navbar ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    padding: 0 20px;  /* Aumentado el padding lateral */
}

.fixed-navbar ul .brand {
    margin-right: auto;
    color: #fff;
    font-size: 20px;  /* Aumentado el tamaño de fuente para hacerla más prominente */
    padding: 0 15px;
}

.fixed-navbar ul li {
    margin: 0 20px;  /* Aumentado el margen para separar más los elementos */
}

.fixed-navbar ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 16px;
    transition: color 0.3s;
}

.fixed-navbar ul li a:hover {
    color: #007BFF;
}

.content {
    margin-top: 80px;  /* Ajustado para acomodar el mayor padding del menú */
    padding: 20px;
}

</style>


<body>
    <nav class="fixed-navbar">
        <ul>
            <li class="brand">Santrips</li>
            <li><a href="#home">Inicio</a></li>
            <li><a href="#about">Acerca de</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#contact">Contacto</a></li>
        </ul>
    </nav>
   
</body>


</html>
