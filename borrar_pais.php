<?php
require ('conx.php');

$sql1="delete from countrylanguage where CountryCode ='$_GET[id]'";
$sql2="delete from city where CountryCode ='$_GET[id]'";

$sql3="delete from country where Code='$_GET[id]'";


if (mysqli_query($conn,$sql1)) {
	echo"Registro borrado";
	header("localtion:pais.php?borrar=true");
} else{
	echo"Error al borrar:".mysqli_error($conn);

}
if (mysqli_query($conn,$sql2)) {
	echo"Registro borrado";
	header("localtion:pais.php?borrar=true");
} else{
	echo"Error al borrar:".mysqli_error($conn);

}

if (mysqli_query($conn,$sql3)) {
	echo"Registro borrado";
	header("localtion:pais.php?borrar=true");
} else{
	echo"Error al borrar:".mysqli_error($conn);

}

mysqli_query($conn,$sql1);
mysqli_query($conn,$sql2);
mysqli_query($conn,$sql3);
mysqli_close($conn);
header('location:pais.php');
?>