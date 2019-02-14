<?php 
function calcularExtencion($fichero){
   // $nombreExt = explode(".",$fichero);
    $inicio = strrpos($fichero, ".") + 1;
  //  return strtoupper($nombreExt[1]);
  return strtoupper(substr($fichero, $inicio));
}
$nombrefichero = "fichero.exe.txt";
$ext = calcularExtension($nombrefichero);
print "<p>La exttensión del archivo $nombrefichero es $ext</p>";

?>