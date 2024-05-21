
@php 
$mysqli = new mysqli("localhost", "root", "020512", "antojitos", 3306);

if ($mysqli->connect_errno){
    echo "fallo al conectar mysql: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
@endphp                 
