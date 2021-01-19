<?php
$id=$_POST['id'];
$Name=$_POST['Name'];
$Country=$_POST['CountryCode'];
$District=$_POST['District'];
$Population=$_POST['Population'];
require('conx.php');
$sql="update city SET Name = '$Name', CountryCode = '$Country', District ='$District', Population ='$Population' WHERE ID = $id";
echo $sql;
 if(mysqli_query($conn,$sql)){
	echo "Registro actualizado";
}else{
	echo "Registro no guardado";
}

mysqli_close($conn);
header('location:city.php');

?>