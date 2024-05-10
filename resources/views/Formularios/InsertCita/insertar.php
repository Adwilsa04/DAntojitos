<?php 
include_once 'conc.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

$sqlinsert = "INSERT INTO cita values(0, '$nombre', '$email', '$direccion', '$ciudad', '$fecha', '$hora')";

$insert = mysqli_query($mysqli, $sqlinsert);

if($insert){
    echo "<script>alert('Se ha registrado correctamente.'); window.location='/Antojitos2/DAntojitos/resources/views/pagianPrinci.html'</script>";
} else {
    echo "<script>alert('Error en el registro.');windor,history.go(-1);</script>";
}

exit();

?>