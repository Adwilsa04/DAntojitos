<?php 
include_once 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$sqlinsert = "INSERT INTO registro values(0, '$nombre', '$apellido', '$telefono', '$email', '$contrasena')";

mysqli_query($mysqli, $sqlinsert);

if($sqlinsert){
    echo 'El registro fue exitoso';
}
else{
    echo 'No se ha podido registrar, intente de nuevo';
}

header("location:./Formularios/registro.php?insert=sucess")
?>