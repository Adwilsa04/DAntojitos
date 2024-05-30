<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="contact-container">
        <h1>Contacto</h1>
        <div class="contact-item">
            <i class="fas fa-envelope"></i> <a href="mailto:tuemail@ejemplo.com">tuemail@ejemplo.com</a>
        </div>
        <div class="contact-item">
            <i class="fas fa-phone"></i> <a href="tel:+1234567890">+123 456 7890</a>
        </div>
        <div class="contact-item">
            <i class="fas fa-map-marker-alt"></i> Dirección: Calle Ejemplo 123, Ciudad, País
        </div>
        <div id="map" class="map-container"></div>
    </div>
    <script>
        function initMap() {
            var location = {lat: -34.397, lng: 150.644}; // Cambia esto a la latitud y longitud de tu ubicación
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
</body>
</html>
