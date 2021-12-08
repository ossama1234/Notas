<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crear Directorio</title>
</head>
<body style="background-color: lightblue">
<?php
    if (isset($_POST["enviarDatos"]) && !empty($_POST["EnviarDatos"]) ) {
      $directorio = htmlspecialchars($_POST["nombreDirectorio"]);

      if (!is_dir($directorio)) {
          $crear = mkdir($directorio, 0777, true);
          echo "<h1> Carpeta " . $directorio . " Creada. </br><h1/>";
      } else {
          echo "<h1> La carpeta ya existe. </br> </h1>";
      }
    }else {
      echo "<h1> Error. Ingrese un nombre para el directorio </br> </h1>";
    }
?>


<a class="btn btn-primary" href="./index.php">Volver</a>
</body>
</html>