<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Biblioteca de CD's</title>

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
  $sql="select * from country where Code='$id'";
  $resultado=mysqli_query($conn,$sql);
  if (mysqli_num_rows($resultado)>0) {
    while ($fila=mysqli_fetch_assoc($resultado)) {
    echo ' <form action="actualizar_pais.php" method="POST">
<input type="text" value="'.$fila['Code'].'" name="id" hidden>

  <div class="form-group">
    <label for="exampleInputName2">Codigo</label>
    <input type="text" class="form-control"  name="Code" value="'.$fila['Code'].'">
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Pais</label>
    <input type="text" class="form-control" name="Name" value="'.$fila['Name'].'">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Continente</label>
    <input type="text" class="form-control" name="Continent" value="'.$fila['Continent'].'">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Region</label>
    <input type="text" class="form-control" name="Region" value="'.$fila['Region'].'">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Area</label>
    <input type="text" class="form-control" name="SurfaceArea" value="'.$fila['SurfaceArea'].'">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Independencia</label>
    <input type="text" class="form-control" name="IndepYear" value="'.$fila['IndepYear'].'">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Poblacion</label>
    <input type="text" class="form-control" name="Population" value="'.$fila['Population'].'">
  
  </div>';
    }
    
  }
?>

  <button type="submit" class="btn btn-danger">Actualizar Pais</button>
</form>
    

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/query.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>