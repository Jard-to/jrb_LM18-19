<!--Realice el siguiente ejercicio de BD. Muestre un formulario para rellenar una caja de texto
 con el nombre de un país. Al pulsar el botón “Buscar” realice una consulta a la base de datos “bdpersonas” 
 en la tabla “personas” para mostrar todas las personas de ese país. Si no existe el país en la base de datos,
  mostrar un mensaje indicandolo.-->
  <!DOCTYPE html>
  <html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Page Title</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>
  <form action="nombrepais.php" method="POST">
<label for="Pais">Pais</label>
<textarea name="Pais" id="Pais" rows="10" cols="20"
                    maxlength="20">

                </textarea>
<br />
<input type="submit" value="Buscar"/>
</form>
<?php
         $conexion = mysqli_connect("localhost", "root", "", "bdpersonas") or die("Problemas de conexión");
        $registros = mysqli_query($conexion, "SELECT pais FROM personas") or die("Problemas en la consulta:".mysqli_error($conexion));
        
        while ($reg=mysqli_fetch_array($registros)) {
            echo "Id: " . $reg['id'] . "<br/>";
            echo "Nombre: " . $reg['nombre'] . "<br/>";
        }
    }
    if ($reg['pais'] !=='pais') {
        echo "no hay personas de ese pais";
        mysqli_close($conexion);
      
  </body>
  </html>