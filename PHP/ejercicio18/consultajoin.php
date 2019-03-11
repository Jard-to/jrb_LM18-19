<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>consultajoin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
         $conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas de conexión");
        $registros = mysqli_query($conexion, "SELECT idAlumno, nombre, mail, codigocurso FROM alumnos 
        as alu inner join cursos as cur on alu.codigocurso = cur.idCurso") 
        or die("Problemas en la consulta:".mysqli_error($conexion));
        echo "<table class='table table-striped'>";
        echo "<tr><th> Código</th><th>Nombre</th><th>Email</th><th>Curso</th></tr>";
        
        while ($reg=mysqli_fetch_array($registros)) {
            echo "<tr>";
            echo "<td>" . $reg['idAlumno'] . "</td>";
            echo "<td>" . $reg['nombre'] . "</td>";
            echo "<td>" . $reg['mail'] . "</td>";
            echo "<td>" . $reg['Curso'] . "</td>";
            echo "</tr>";
        }
        mysqli_close($conexion);
    ?>
</body>
</html