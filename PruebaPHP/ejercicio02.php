 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Realice el siguiente programa. En la primera pantalla se debe solicitar el nombre al usuario.
 Este nombre debe quedar guardado en sesión. En la segunda pantalla debe solicitar su peso y su altura.
  En la tercera pantalla debe mostrar el siguiente mensaje con su nombre en función de su
   índice de masa corporal (imc).
IMC = peso (kg) / altura² (metros)
imc<18.5 -> "BAJO PESO"
imc>=18.5 y imc<=24.9 -> "NORMAL"
imc>=25 y imc<=29.9 -> "SOBREPESO
imc>29.9 -> "OBESIDAD"-->
<form action="MASA" esnctype="multipart/form-data" method="POST">
<label for="peso">Introduzca su  Nombre: </label>
        <input type="text" name="nombre" id="nombre"><br/>
        <label for="peso">Introduzca su  Usuario: </label>
        <input type="text" name="usuario" id="usuario"><br/>

        <label for="peso">Introduzca su peso (KG): </label>
        <input type="text" name="peso" id="peso"><br/>

        <label for="altura">Introduzca su altura (CM): </label>
        <input type="text" name="altura" id="altura"><br/>

        <input type="submit" value="Enviar"></p>
    </form>
<?php
$nombre = trim(htmlspecialchars(strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));
$usuario = trim(htmlspecialchars(strip_tags($_REQUEST["usuario"]), ENT_QUOTES, "UTF-8"));
$peso = trim(htmlspecialchars(strip_tags($_REQUEST["peso"]), ENT_QUOTES, "UTF-8"));
  $altura = trim(htmlspecialchars(strip_tags($_REQUEST["altura"]), ENT_QUOTES, "UTF-8"));
  if (!empty($peso) && !empty($altura) && is_numeric($peso) && is_numeric($altura) && $peso >= 0 && $altura >= 0) {
        $alturaM = $altura/100;
      $alturaCM = $alturaM*$alturaM;
      $imc = $peso/$alturaCM;
   } else if ($imc['18.5']) {
      echo "BAJO PESO";
   } else if ($imc['18.5-24.9']) {
      echo "NORMAL";
      else if ($imc['25-29.9']) {
         echo "SOBREPESO";
     }
     else ($imc['29.9'])
     echo "OBESIDAD"
?>
 </head>
 <body>
    
 </body>
 </html>