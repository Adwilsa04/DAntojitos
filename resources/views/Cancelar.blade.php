<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelar Pedido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        #cancel-form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        textarea {
            width: 100%;
            height: 100px;
            resize: none;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background-color: #8B0000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
        }
        button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div id="cancel-form">
        <h2>Cancelar Pedido</h2>
        <form id="reason-form" onsubmit="handleCancel(event)">
            <label for="reason">Razón para cancelar:</label>
            <textarea id="reason" name="reason" required></textarea>
            <button type="submit">Confirmar Cancelación</button>
        </form>
    </div>

    <script>
        function handleCancel(event) {
            event.preventDefault(); // Evita que el formulario se envíe por defecto
            const reason = document.getElementById("reason").value;
            // Aquí puedes hacer lo que quieras con la razón de cancelación
            console.log("Razón para cancelar:", reason);
            alert("Pedido cancelado. Razón: " + reason);
            // Redirige al usuario a otra página o realiza cualquier otra acción necesaria
        }
    </script>
</body>
</html>
