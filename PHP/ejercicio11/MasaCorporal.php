<?php
$peso = trim(htmlspecialchars($_REQUEST["peso"], ENT_QUOTES, "UTF-8"));
$altura = trim(htmlspecialchars($_REQUEST["altura"], ENT_QUOTES, "UTF-8"));
$pesok = false;
$alturak = false;
define('UNMETRO', 100);
if (empty($peso)) {
    print "<p>Campo Peso vacío</p>";
} else if (!filter_var($peso, FILTER_VALIDATE_INT)) {
    print "<p>Campo Peso No es un Número Entero</p>";
} else if ($peso < 0) {
    print "<p>Campo Peso debe ser >= 0</p>";
} else {
    $pesok = true;
}
if (empty($altura)) {
    print "<p>Campo altura vacío</p>";
} else if (!filter_var($altura, FILTER_VALIDATE_FLOAT)) {
    print "<p>Campo altura No es un Número Decimal</p>";
} else if ($altura < 0) {
    print "<p>Campo altura debe ser >= 0</p>";
} else {
    $pesok = true;
}
if ($pesok && $alturak) {
    $masa = ($peso / ( $altura * $altura ) * UNMETRO;
    print "<p>$peso en gramos y $altura  son $cm centímetros</p>";
}
?>