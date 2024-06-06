<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Perfil</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap');
        body {
            margin: 0;
            font-family: 'Cinzel';
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 450px;
            color: #333333;
            padding: 20px;
        }
        .profile-header {
            background-color: #f12f1f;
            color: #ffffff;
            padding: 25px 0;
            text-align: center;
            font-size: 1.5em;
            font-weight: bold;
        }
        .tab-container {
            display: flex;
            justify-content: space-around;
            background-color: #eeeeee;
            cursor: pointer;
        }
        .tab {
            padding: 15px 20px;
            flex-grow: 1;
            text-align: center;
            border-bottom: 3px solid transparent;
            transition: background-color 0.3s, border-bottom 0.3s;
            color: #333333;
        }
        .tab:hover {
            background-color: #dddddd;
        }
        .tab.active {
            border-bottom: 3px solid #f12f1f;
        }
        .tab-content {
            display: none;
            padding: 20px;
        }
        .tab-content.active {
            display: block;
        }
        .profile-details h2 {
            margin: 10px 0;
            text-align: center;
            color: #f12f1f;
            font-size: 1.8em;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: calc(100% - 40px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }
        .form-group button {
            padding: 8px 15px;
            border: none;
            background-color: #f12f1f;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-group button:hover {
            background-color: #dd2222;
        }
        .toggle-password {
            background: none;
            border: none;
            color: #f12f1f;
            cursor: pointer;
            position: absolute;
            right: 5px;
            top: 73%;
            transform: translateY(-50%);
            padding: 5px 10px;
            font-size: 0.8em;
            border-radius: 5px;
        }
        .password-container {
            position: relative;
        }
        .save-button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #f12f1f;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }
        .save-button:hover {
            background-color: #dd2222;
        }

        a{
            font-family: 'Cinzel';
            color: #ffffff;
            text-decoration: none;
        }

        .regresar{
            padding: 10px;
            border: none;
            background-color: #f12f1f;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px; 
        }

        .regresar:hover{
            background-color: #dd2222;
        }

    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            Perfil
        </div>

        <div class="tab-container">
            <div class="tab active" onclick="openTab(event, 'details')">Detalles</div>
        </div>

        <div id="details" class="tab-content active">
            <div class="profile-details">
                <h2 id="user-name">Juan Rosa</h2>

                <div class="form-group">
                    <label for="nombre_cliente">Nombre</label>
                    <input type="text" id="nombre_cliente" value="Juan">
                </div>

                <div class="form-group">
                    <label for="apellido_cliente">Apellido</label>
                    <input type="text" id="apellido_cliente" value="Rosa">
                </div>

                <div class="form-group">
                    <label for="telefono_cliente">Teléfono</label>
                    <input type="text" id="telefono_cliente" value="829-321-0364">
                </div>

                <div class="form-group">
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" id="correo" value="JuanRosa22@gmail.com">
                </div>

                <div class="form-group password-container">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena" value="123456789">
                    <button type="button" class="toggle-password" onclick="togglePasswordVisibility()">Mostrar</button>
                </div>
                <button type="button" class="save-button">Guardar Cambios</button>
                <br>
                <br><br>
    <button class="regresar"><a href="{{ route('inicio') }}">Regresar</a></button>
                </div>
                </div>
                </div>
            
                <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
                tabcontent[i].classList.remove("active");
            }
            tablinks = document.getElementsByClassName("tab");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            document.getElementById(tabName).style.display = "block";
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }

        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('contrasena');
            var toggleButton = document.querySelector('.toggle-password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleButton.textContent = 'Ocultar';
            } else {
                passwordInput.type = 'password';
                toggleButton.textContent = 'Mostrar';
            }
        }
    </script>
</body>
</html>
