<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Color</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color:
    <?php
        if (isset($_COOKIE['color'])) {
            echo $_COOKIE['color'];
        }
    ?>">
    <form action="cambiar.php">
        <label>Elige un color: </label>
        <input type="radio" value="#FF0000" name="color">Rojo
        <input type="radio" value="#00FF00" name="color">Verde
        <input type="radio" value="#0000FF" name="color">Azul
        <input type="submit" value="Enviar">
    </form>
</body>
</html