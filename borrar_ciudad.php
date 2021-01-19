<?php
require ('conx.php');
$sql1="delete from city where ID='$_GET[id]'";


if (mysqli_query($conn,$sql1)) {
	echo"Registro borrado";
	header("localtion:city.php?borrar=true");
} else{
	echo"Error al borrar:".mysqli_error($conn);

}

mysqli_query($conn,$sql1);

mysqli_close($conn);
header('location:city.php');
?>