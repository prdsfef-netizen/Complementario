<?php
//informacion del servidor de bs
$servername ="localhost";
$username ="root";
$password ="";
$database = "world";

// conectando al servidor
$conn=mysqli_connect($servername,$username,$password,$database);
// Revisando la conexion.
if(!$conn) {
   die("conexion fallida:" .mysqli_connect_error());
}
?>
