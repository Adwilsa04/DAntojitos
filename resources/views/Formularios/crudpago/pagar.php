<?php 
include_once 'c.php';

$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$tipo_pago = $_POST['tipo_pago'];
$descripcion = $_POST['descripcion'];
$monto = $_POST['monto'];
$nombre_tarjeta = $_POST['nombre_tarjeta'];
$num_tarjeta = $_POST['num_tarjeta'];
$mes_expiracion = $_POST['mes_expiracion'];
$ano_expiracion = $_POST['ano_expiracion'];
$cvv = $_POST['cvv'];

$sqlinsert = "INSERT INTO pago VALUES (0, '$nombre_completo', '$email', '$tipo_pago', '$descripcion', '$monto', '$nombre_tarjeta', '$num_tarjeta', '$mes_expiracion', '$ano_expiracion', '$cvv', NOW(), default)";

$insert = mysqli_query($mysqli, $sqlinsert);

if($insert){
    echo "<script>alert('Se ha registrado correctamente.'); window.location='/Antojitos2/DAntojitos/resources/views/pagianPrinci.html'</script>";
} else {
    echo "<script>alert('Error en el registro.'); window.history.go(-1);</script>";
}

exit();
?>
