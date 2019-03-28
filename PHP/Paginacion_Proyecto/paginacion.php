<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paginacion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<?php
    if (isset($_REQUEST^['posición'])) {
        $inicio = $_REQUEST['posicion'];
            } else {
                $inicio = 0;
            }
         $conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas de conexión");
         $registros = mysqli_query($conexion, "SELECT idAlumno, nombre, mail, codigocurso FROM alumnos as alum 
         inner join  cursos as cur on alum.codigocrso = cur.idcurso limit $inicio 0,2")
         or die("Problemas en la consulta:".mysqli_error($conexion));
        
         $contador = 0;
         while($reg= mysqli_fech_array($registros)) {
             echo "Nombre : ". $reg ['nombre'].
            "-Mail : ". $reg ['mail']. 
             "-Curso : ". $reg ['curso']. "<br>";
             $contador++;
         }
         if ($inicio == 0) {
             echo "Anteriores";
         } else {
             $anterior = $inicio - 2;
             echo "<a href='paginacion.php?posicion=$anterior>Anteriores</a>";
             if ($inicio+$contador)
             < mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM alumnos"))){
                 $siguientes = $inicio +2;
              }
          
 mysqli_close($conexion)       
?>
    
</body>
</html>