<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Crear Archivo TXT</title>
</head>
<body style="background-color: lightblue">

  <?php
    if (isset($_POST["enviarDatos"])) {
            
       if (isset($_POST['nombreArchivo']) && !empty($_POST['nombreArchivo'])) {
                if (isset($_POST['carpeta']) && !empty($_POST['carpeta'])){          
                     $directorio = htmlspecialchars($_POST["carpeta"]);
                      if (is_dir($directorio)) {
                     chdir($directorio);
                     $archivo = fopen($_POST["nombreArchivo"] . ".txt","a");
                     fwrite($archivo, $_POST["textoArchivo"]);
        
                     fflush($archivo);
                     echo " <h1> Archivo creado. </br> </h1>";
                   }else{
                      echo "<h1> El nombre del directorio ingresado no existe </h1>";
                     }

            }else{
                  $archivo = fopen($_POST["nombreArchivo"] . ".txt","w+b");
                  fwrite($archivo, $_POST["textoArchivo"]);
                  fflush($archivo);
                  echo " <h1> Archivo creado. </br></h1>";
                  fclose($archivo);
            } 

      }else{
           echo " <h1> Error. Ingrese el nombre del archivo </h1>";
     }
}
?>


<a class="btn btn-primary" href="./index.php">Volver</a>
</body>
</html>


