<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Segundo</title>
</head>
<body>
<?php
$referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
//se guarda la última url visitada
//esto es para el boton de volver atrás
if (!empty($referer)){
    echo "<p><a href='$referer'>Volver atrás</a></p>";
} else { //en hipotetico caso de que no se recuerde en el servidor la pagina anterior....
    echo "<p><a href='javascript:history.go(-1)'>Volver atrás</a></p>";
}
$usuario = trim(htmlspecialchars($_REQUEST["usuario"], ENT_QUOTES, "UTF-8"));
$password = trim(htmlspecialchars($_REQUEST["password"], ENT_QUOTES, "UTF-8"));
//con esto capturamos el usuario y la clave enviados en el formulario.
//Comprobamos que no estén vacíos, si no mensaje de error para que rellene. 
//si está relleno, comprobar que el password está bien si no, error de nuevo.
// || = o, así que el error se dará aunque uno esté vacío.
if (empty($usuario) || empty($password)){
    header('location: primero.php?error=Debe rellenar los campos');
    //si alguno está vacío iremos a
    //primero.php y en el _Request enviará el parámetro error a la URL de la web
} else if ($password != "1234"){ //si la password no es 1234 dará el error de abajo
    header('location: primero.php?error=Password Incorrecta');
} else {
    setcookie("usuarioWeb", $usuario, time()+60*60*24*365);
     //nombre de cookie, valor y tiempo expiración 1año
session_start(); //al estar ya todo enviado inicia la sesión y aparece otro formulario para elegir la edad
$_SESSION['nombreUsuario'] = $usuario;
?>
<div style="margin: 0 auto; width: 200px">
<form method="GET" action="tercero.php">
    <p>
<label for="edad">Edad:</label>
<input type="date" name="edad" id="edad"/>
</p>
<p>
    <input type="submit" value="Enviar"/>
</p>
</form>
</div>
<?php
//se hace esto para evitar tener que poner prints por cada bloque del formulario
//se pone GET porque o hay password, si no hay password, siempre GET
}
?>
</body>
</html>