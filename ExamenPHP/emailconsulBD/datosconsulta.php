<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>CONSULTA REALIZADA</title>
</head>
<body>
<?php
//Cree un formulario para introducir un email.
//En la página de respuesta debe mostrar todos los datos del alumno con ese email
//o un mensaje indicando que el email no existe en la base de datos.
$email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));
//obtenemos el email
$conexion = mysqli_connect("localhost", "root", "root", "cursophp") or die("Problemas con la conexión");
$registros = mysqli_query($conexion, "SELECT idAlumno, nombre, mail, codigocurso from alumnos WHERE mail LIKE '$email'")
or die("Problemas en la consulta:".mysqli_error($conexion));
//hacemos la consulta introduciendo un email de cualquier alumno
//si hay alguno igual, mostrará entonces los datos del alumno
//que tenga ese email
if ($reg = mysqli_fetch_array($registros)) {
echo "<table class='table table-striped'>";
echo "<tr><th>Código</th><th>Nombre</th><th>email</th><th>Código curso</th>";
echo "<tr>";
echo "<td>" . $reg['idAlumno'] . "</td>";
echo "<td>" . $reg['nombre'] . "</td>";
echo "<td>" . $reg['mail'] . "</td>";
echo "<td>" . $reg['codigocurso'] . "</td>";
echo "</tr>";
echo "</table>";
} else echo "El email indicado no existe en la base de datos";
mysqli_close($conexion);
?>
</body>
</html>