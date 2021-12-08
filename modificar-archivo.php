<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Leer Archivo</title>
</head>
<body style="background-color: lightblue">
<?php



  if (isset($_POST["enviarDatos"])) {
      $directorio = htmlspecialchars($_POST["carpeta"]);
      if (is_dir($directorio)) {
          chdir("hola/");
          $archivo = fopen($_POST["nombreArchivo"] . ".txt","a");
          fwrite($archivo, $_POST["textoArchivo"]);
        
             fflush($archivo);

             echo "<h1> Archivo modificado. </br><h1>";
           }



      }else{

          $archivo = fopen($_POST["nombreArchivo"] . ".txt","w");
         if( $archivo == false ) {
         echo "<h1>Error al modificar el archivo <h1>";
       }
        else
        {
            fwrite($archivo, $_POST["textoArchivo"]);
        
             fflush($archivo);

             echo "<h1>Archivo modificado. </br> <h1>";
       }
       fclose($archivo);
    

   

  }

?>
<a class="btn btn-primary" href="./index.php">Volver</a>
</body>
</html>