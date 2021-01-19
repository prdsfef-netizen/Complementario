<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Paises</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php
  //Mensaje de alerta
  if(isset($_GET["borrar"])&&["borrar"]== "true"){
     echo"<script>
      alert('Registro borrado'):
     </script>";
     }
  if(isset($_GET["borrar"])&&["borrar"]== "false"){
     echo"script>
      alert('Registro borrado'):
     </script>";
   }

?>
}
 <h1 style=text-align:center;
     <a href="index.html">Inicio</a>
     <a href="city.php">Ciudad</a>
     <a href="pais.php">Pais</a>
     
     <div class="jumbotron">
     <h1>Paises</h1>

 
</div>
<form method="GET" action="">
<input type="text" name="buscar" placeholder="Introduce el criterio">
<button type="submit">Buscar</button>
</form>
<table class="table table-hover">
     <tr>
         <th>Acciones</th>
         <th>Codigo</th>
         <th>Nombre</th>
         <th>Continente</th>
         <th>Region</th>
         <th>Area</th>
         <th>Año de independencia</th>
         <th>Población</th>

  <body>

  <style> html, body, a, a:hover { cursor:url('http://www.snazzyspace.com/cursorsfolder/3d-hipster-triangle.png'), auto !important; }</style>
<div><a style="position:fixed;z-index:9 !important;top:300px;left:3px;" href="http://www.snazzyspace.com/" title="Tumblr Mouse Cursors" target="_blank"><img 
src="http://www.snazzyspace.com/images/tumblr_cursors.gif" border="0" alt="Tumblr Mouse Cursors" /></a></div> 
    <h1>Paises</h1>
<?php
//conectar al servidor
require("conx.php");
if(isset($_GET["buscar"]) && $_GET["buscar"] !=""){
  $buscar=$_GET["buscar"];
$sql="select Code, Name, Continent,Region,SurfaceArea,IndepYear,Population from country where Name like '%$buscar%' ";
}else{
$sql="select Code, Name, Continent,Region,SurfaceArea,IndepYear,Population  from country ";
}


//Ejecuctar la consulta
$resultado=mysqli_query($conn,$sql);
//Mostrar el resultado
  //contar si trae registros
if(mysqli_num_rows($resultado) >0){
   while($fila= mysqli_fetch_assoc($resultado)){
      //Mostrar los registros
      echo "<tr>
            <td>";
      echo"<a href='borrar_pais.php?id=".$fila["Code"],"'><img width='20' src='img/lol.png'></a>
      <a href='editar_pais.php?id=".$fila["Code"],"'><img src='img/portafolios-con-lapiz.png' height='25' width='25'></a>

         <a href='registrar_pais.html'><img src='img/icons8-Actualizar-64.png' height='25' width='25'></a>
         <a href='idioma.php'><img src='img/d404db1ccb1b3b936599d4b1fb0b3c95.png' height='25' width='25'></a>
         <a href='cp.php'><img src='img/d404db1ccb1b3b936599d4b1fb0b3c95.png' height='25' width='25'></a>
         <a href='gobiernor.php'><img src='img/d404db1ccb1b3b936599d4b1fb0b3c95.png' height='25' width='25'></a>
         <a href='gobiernof.php'><img src='img/d404db1ccb1b3b936599d4b1fb0b3c95.PNG' height='25' width='25'></a>
         <a href='gobiernoi.php'><img src='img/IS.png' height='25' width='25'></a>
         
         

      </td>";
      echo "<td>";
      echo $fila["Code"];
      echo "</td>
            <td>";
      echo $fila["Name"];
      echo "</td>
            <td>";
      echo $fila["Continent"];
       echo "</td>
            <td>";
      echo $fila["Region"];
            echo "</td>
            <td>";
      echo $fila["SurfaceArea"];
           echo "</td>
          <td>";
      echo $fila["IndepYear"];
          echo "</td>
            <td>";
      echo $fila["Population"];
          echo "</td>
            <td>
      
      
      </tr>";
     
   }

}
mysqli_close($conn);

?>
</table>
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>