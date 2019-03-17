<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tercero</title>
</head>
<body>
    <div style="margin: 0 auto; width: 400px">
<?php
print "<P>Fecha nacimiento: $_REQUEST[edad]</p>"; //se llama lo introducido en edad
print "<p>Fecha actual:" . date('Y-m-d') . "</p>"; //en fecha actual aparecerá año mes dia
//calcular la diferencia entre f nac y f actual (abajo)
list($year, $month, $day) = explode("-", $_REQUEST['edad']);
//con explode se coge la fecha actual y el delimitador es un - que separa la fecha introducida de la fecha de nac
$yeardiferencia = date("Y") - $year; //de la fecha actual solo el año
$monthdiferencia = date("m") - $month; //de la fecha actual solo el mes
$daydiferencia = date("d") - $day; //de la fecha actual solo el dia
if ($monthdiferencia < 0 || ($monthdiferencia = 0 && $daydiferencia < 0)){
    $yeardiferencia--; //-- resta uno a yeardiferencia
} //si no ha sido el cumpleaños aún se hace esto
session_start(); //una vez enviado la edad de nacimiento en el formulario aparecerá el nombre y la edad actual
print "<p> Bienvenido $_SESSION[nombreUsuario]</p>";
print "<p> Su edad es $yeardiferencia años </p>";
?>



</div>
</body>
</html>