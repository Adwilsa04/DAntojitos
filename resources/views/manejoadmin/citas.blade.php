<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gestor de Citas</title>
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
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
    padding: 10px 20px;
    background-color: #f12f1f;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 20px;
    font-family: 'Poppins';
}

button:hover{
    color: #fff;
    background-color: #619E48;
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

table {
        margin: 0 auto;
        border-collapse: collapse;
        width: 80%;
        max-width: 1000px;
        background-color: #fff;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    }
    th, td {
        padding: 12px 15px;
        border: 1px solid #ddd;
        font-family: Arial;
    }
    th {
        background-color: #333;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-family: 'Cinzel';
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f5f5f5;
    }

</style>

<body>
<x-index></x-index>
<br><br><br><br><br>
<h1>Gestión de Citas</h1>
<br>
<table border="0">
    <tr>
        <th>Id De Cita</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Dirección</th>
        <th>Ciudad</th>
        <th>Fecha</th>
        <th>Hora</th>
    </tr>
<?php
include_once 'conex.blade.php';

$query = "SELECT id_cita, nombre, email, direccion, ciudad, fecha, hora FROM cita";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data); 


if($total!=0){
    while($row=mysqli_fetch_assoc($data)){
        echo "<tr> <td>" . $row['id_cita'] . "</td> <td>" . $row['nombre'] . "</td> <td>" . $row['email'] . "</td> <td>" . $row['direccion'] . "</td> <td>" . $row['ciudad'] . "</td> <td>" . $row['fecha'] . "</td> <td>" . $row['hora'] . "</td> <td> <button href='editarusu.php?rn=$row[id_cita]'>Aceptar</button></td> </tr>";
    }
}

?>
</table>
</body>
<x-footer></x-footer>
</html>