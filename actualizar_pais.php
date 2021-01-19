<?php
$id=$_POST['Code'];
$Name=$_POST['Name'];
$Continent=$_POST['Continent'];
$Region=$_POST['Region'];
$Area=$_POST['SurfaceArea'];
$IndepYear=$_POST['IndepYear'];
$Population=$_POST['Population'];
require('conx.php');
$sql="update city SET Code= '$id',Name = '$Name', Continent = '$Continent', Region ='$Region', SurfaceArea ='$Area', IndepYear ='$IndepYear', Population ='$Population' WHERE Code = $id";
echo $sql;
 if(mysqli_query($conn,$sql)){
	//echo "Registro actualizado";
}else{
	//echo "Registro no guardado";
}

mysqli_close($conn);
//header('location:pais.php');

?>