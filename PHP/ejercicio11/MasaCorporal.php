<?php
$peso = trim(htmlspecialchars($_REQUEST["peso"], ENT_QUOTES, "UTF-8"));
$altura = trim(htmlspecialchars($_REQUEST["altura"], ENT_QUOTES, "UTF-8"));
$pesok = false;
$alturak = false;
define('UNMETRO', 100);
if (empty($pesok)) {
    print "<p>Campo Peso vacío</p>";
} else if (!filter_var($pies, FILTER_VALIDATE_INT)) {
    print "<p>Campo Peso No es un Número Entero</p>";
} else if ($pies < 0) {
    print "<p>Campo Peso debe ser >= 0</p>";
} else {
    $pesok = true;
}
if (empty($altura)) {
    print "<p>Campo altura vacío</p>";
} else if (!filter_var($pulgadas, FILTER_VALIDATE_FLOAT)) {
    print "<p>Campo altura No es un Número Decimal</p>";
} else if ($pulgadas < 0) {
    print "<p>Campo altura debe ser >= 0</p>";
} else {
    $esok = true;
}
if ($pesok && $alturak) {
    $masa = ($peso / ( $altura * $altura ) * UNAPULGADA;
    print "<p>$pies pies y $pulgadas pulgadas son $cm centímetros</p>";
}
?>