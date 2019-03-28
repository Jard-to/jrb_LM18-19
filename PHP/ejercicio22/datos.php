<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Datos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    $email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));
    $conexion = mysqli_connect("localhost", "root", "root", "cursophp") 
      or die("Problemas en la conexión");
    
    $registro = mysqli_query($conexion, "SELECT * FROM alumnos WHERE mail like '$email'")
      or die("Problemas en la consulta:".mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registro)) {
        ?>
            <form action="actualizar.php" method="post">
                <input type="hidden" name="identificador" id="identificador" 
                  value="<?php echo $reg['idAlumno']; ?>" >
                <p>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" 
                      value="<?php echo $reg['nombre']; ?>">
                </p>
                <p>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" 
                      value="<?php echo $reg['mail']; ?>" readonly>
                </p>
                <p>
                    <label for="curso">Curso</label>
                    <select name="curso" id="curso">
                    <?php
                    $recursos = mysqli_query($conexion, "SELECT * FROM CURSOS")
                    or die ("problemas en la consulta:".mysqli_error)
                    ?>
                      
                </p>
            </form>
        <?php
    } else {
        echo "<p>Email No Encontrado en la BD</p>";
    }
    ?>
</body>
</html>