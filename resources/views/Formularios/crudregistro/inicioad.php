<?php 
include_once 'conexion.php';

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$consulta = "SELECT * FROM admin WHERE email='$email' and contrasena='$contrasena'";

$Rep = mysqli_query($mysqli, $consulta);

$filas = mysqli_num_rows($Rep);

if ($filas > 0) {
    echo "<script>alert('Se ha iniciado sección correctamente'); window.location='pantadmin.blade.php'</script>";
} else {
    echo "<script>alert('Error en la autentificación');windor,history.go(-1);</script>";
}

?>