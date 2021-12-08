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
     if (isset($_POST["enviarDatosLeer"])) {
       if (isset($_POST['nombreArchivoLeer']) && !empty($_POST['nombreArchivoLeer'])) {
                if (isset($_POST['carpeta']) && !empty($_POST['carpeta'])){          
                     $directorio = htmlspecialchars($_POST["carpeta"]);
                      if (is_dir($directorio)) {
                     chdir($directorio);
                         if (file_exists($_POST["nombreArchivoLeer"] . ".txt")) {
                              $cadena = file_get_contents($_POST["nombreArchivoLeer"] . ".txt");
                         } else {
                             $cadena= "Archivo no encontrado";
                         }
                   }else{
                      $cadena= "El nombre del directorio ingresado no existe";
                     }

            }else{
                 if (file_exists($_POST["nombreArchivoLeer"] . ".txt")) {
                    $cadena = file_get_contents($_POST["nombreArchivoLeer"] . ".txt");

                } else {
                    $cadena= "Archivo no encontrado";
                 }
            } 

      }else{
           $cadena= "Error. Ingrese el nombre del archivo";
     }
}


?>
  <div class=" fluid mt-5 ">
      <div class="row ">
        <div class="col-1 "></div>
        <div class="col-lg-11 col-sm-12">
<textarea style="width:30%;" rows="10" id="list_content">
   <?php
   echo"$cadena";
   ?>
   </textarea>
  </div>
  </div>
    <div class="row ">
        <div class="col-1 "></div>
        <div class="col-lg-11 col-sm-12">
<a class="btn btn-primary" href="./index.php">Volver</a>
  </div>
  </div>
</div>
</div>
</body>
</html>




