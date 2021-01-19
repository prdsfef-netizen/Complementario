<?php
$Name=$_POST['Name'];
$Country=$_POST['CountryCode'];
$District=$_POST['District'];
$Population=$_POST['Population'];
require('conx.php');
$sql="insert into city (Name,CountryCode,District,Population) values('$Name','$Country','$District','$Population')";
echo $sql;
if(mysqli_query($conn,$sql)){
  echo "Registro guardado";
   header('location:city.php');
 }else{
  echo "No se pudo guardar";
 mysqli_close($conn);
   //registro de clientes
 header('location:city.php');
}
?>