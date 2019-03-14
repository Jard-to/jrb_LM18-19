<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta Join</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "cursophp") 
            or die("Problemas con la conexión");
            $registros = mysqli_query($conexion, 
            "SELECT alu.idAlumno, alu.nombre, alu.mail, cur.nombreCurso 
            from alumnos as alu inner join cursos as cur on alu.codigocurso = cur.idCurso") 
            or die("Problemas en la consulta:".mysqli_error($conexion));
            
            echo "<table class='table table-striped'>";
            echo "<tr><th>Código</th><th>Nombre</th><th>Email</th><th>Curso</th></tr>";
                while ($reg = mysqli_fetch_array($registros)) {
                    echo "<tr>";
                        echo "<td>" . $reg['idAlumno'] . "</td>";
                        echo "<td>" . $reg['nombre'] . "</td>";
                        echo "<td>" . $reg['mail'] . "</td>";
                        echo "<td>" . $reg['nombreCurso'] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";
            mysqli_close($conexion);
    ?>
</body>
</html