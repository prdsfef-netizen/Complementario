<?php
$Code=$_POST['Code'];
$Name=$_POST['Name'];
$Continent=$_POST['Continent'];
$Region=$_POST['Region'];
$SurfaceArea=$_POST['SurfaceArea'];
$IndepYear=$_POST['IndepYear'];
$Population=$_POST['Population'];
require('conx.php');
$sql="insert into country (Code,Name,Continent,Region,SurfaceArea,IndepYear,Population) values('$Code','$Name','$Continent','$Region','$SurfaceArea','$IndepYear','$Population')";
echo $sql;
if(mysqli_query($conn,$sql)){
  echo "Registro guardado";
     header('location:pais.php');
 }else{
  echo "No se pudo guardar";
 mysqli_close($conn);
   //registro de clientes
 //header('location:pais.php');
}
?>