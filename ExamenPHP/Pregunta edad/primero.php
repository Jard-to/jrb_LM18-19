<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Primero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div>
    <!-- Debes realizar una aplicación utilizando cookies y sesiones. En la primera página debe existir un formulario con el usuario y la password. 
    El usuario se debe guardar para que aparezca relleno la próxima vez que entre. Al enviar el formulario vamos a una segunda página donde comprobamos si la password es correcta. 
    Si no lo es, volver a la página principal y mostrar un error. Si es correcta, mostrar un formulario para rellenar la fecha de nacimiento del usuario.
    Al enviar el formulario,vamos a una tercera página donde se le mostrará al usuario un mensaje de bienvenida con su nombre de usuario y su edad en años. 
    Todas las páginas tienen que tener un botón volver. Has los cambios que consideres oportunos y resuelve las dudas de la mejor manera posible-->

<?php
//preguntaremos si error está definido, en caso de si saltará un error en rojo
if (isset($_REQUEST["error"])){
    print "<p style='color: red'> $_REQUEST[error] </p>";
    //aquí el [error] va sin comillas porque va dentro del print
}
?>

</div>
    <form method="POST" action="segundo.php">
<p>
    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" id="usuario" value="<?php
    if (isset($_COOKIE["usuarioWeb"])){ //si la cookie en segundo.php está definida se almacenará el valor del 
        //nombreusuario, se usa echo para que escriba el cookie con el dato a recordar
        echo $_COOKIE["usuarioWeb"];
    }?>"/>
</p>

<p>
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password"/>
</p>

<p>
    <input type="submit" value="Entrar"/>
</p>


    </form>


<?php
//method POST es porque vamos a enviar usuario y clave
//en usuario dejamos value vacio para luego rellenarlo con la cookie
//primero hacemos el formulario, el php de arriba se hace despues del if de segundo.php
//tercer paso tras definir en segundo.php la cookie, aquí la agregamos al value de usuario.
?>


    
</body>
</html