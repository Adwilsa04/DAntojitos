<?php 
include_once 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$sqlinsert = "INSERT INTO registro values(0, '$nombre', '$apellido', '$telefono', '$email', '$contrasena')";

$insert = mysqli_query($mysqli, $sqlinsert);

if($insert){
    echo "<script>alert('Se ha registrado correctamente.'); window.location='/Antojitos2/DAntojitos/resources/views/pagianPrinci.html'</script>";
} else {
    echo "<script>alert('Error en el registro.');windor,history.go(-1);</script>";
}

exit();

?>