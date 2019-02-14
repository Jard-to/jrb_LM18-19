<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<?php
function calculaHipotenusa ($par1, $par2)  {
$hipo = sqrt($par1*$par1 + $par2*$par2);
return $hipo;
}
function imprimir($mensaje) {
    print "<p>$mensaje</p>";
}

$cat1 = 12;
$cat2 = 16;
$hipotenusa =calculalaHipotenusa($cat1, $cat2);
print "<p>El triangulo de lados $cat1, $cat2 y hipotenusa $hipotenusa</p>";
 imprimir("hola que tal");

?>
    
</body>
</html>