<!--Realice el siguiente programa. Cree un formulario para calcular
el área y el perímetro de un rectángulo. En el formulario principal deben
aparecer dos cajas de texto para indicar la base y la altura del rectángulo. 
Además, añadir un radiobutton para indicar si lo que queremos calcular es el área o el perímetro. 
Cuando se pulse en el botón “Calcular” debe mostrar el resultado en la siguiente pantalla.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rectángulo</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
</head>
<body>

    <form action="1.php" enctype="multipart/form-data" method="POST">
        <label for="num1">Introduzca la base: </label>
        <input type="text" name="num1" id="num1"><br/>

        <label for="num2">Introduzca la altura: </label>
        <input type="text" name="num2" id="num2"><br/>

        <input type="radio" name="selection" id="area" value="area" checked="checked">Área<br/>
        <input type="radio" name="selection" id="peri" value="peri">Perímetro<br/>

        <input type="submit" value="Calcular">
    </form>


     <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

            <?php
            $num1 = trim(htmlspecialchars(strip_tags($_REQUEST["num1"]), ENT_QUOTES, "UTF-8"));
            $num2 = trim(htmlspecialchars(strip_tags($_REQUEST["num2"]), ENT_QUOTES, "UTF-8"));
            $selection = trim(htmlspecialchars(strip_tags($_REQUEST["selection"]), ENT_QUOTES, "UTF-8"));
              
            if (!empty($num1) && !empty($num2) && is_numeric($num1) && is_numeric($num2)) {
              if ($selection == "area") {
                $result = $num1*$num2;
                echo "El área es: $num1 x $num2 = $result";
                } else {
                  $result = 2*($num1+$num2);
                  echo "El perímetro es: 2 x ($num1 + $num2) = $result";
                  ?>
</body>


</html>