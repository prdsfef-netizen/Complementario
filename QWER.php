<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Actualizacion de</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<?php
require("conx.php");
$id=$_GET["id"];
$sql="select * from city where ID=$id";
$resultado=mysqli_query($conn,$sql);
if(mysqli_num_rows($resultado)>0){
  while ($fila=mysqli_fetch_assoc($resultado)) {
    echo '<form method="post" action="actualizar_.php">
    <input type ="text" value="'.$fila['ID'].'" name="id" hidden>

  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="Name" placeholder=" escribe nombre" value="'.$fila['Name'].'">
  </div>
 <div class="form-group">
  <label>Codigo de pais</label>
  <input type="text" name="CountryCode" placeholder="Codigo del pais" value="'.$fila['CountryCode'].'">
</div>
  <div class="form-group">
    <label>Distrito</label>
    <input type="text" name="District" placeholder="Escribe el distrito" value="'.$fila['District'].'">
  </div>
  <div class="form-group">
    <label>Población</label>
    <input type="text" class="form-control" name="Population" placeholder="Escribe la población" value="'.$fila['Population'].'">
  </div>'
  ;

  }
}
?>
  
   
      


  
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
  

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>