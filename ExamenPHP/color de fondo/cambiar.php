<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Color</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    if (isset($_REQUEST['color'])) {
        setcookie("color", $_REQUEST['color'], time()+60*60*24*365);
    }
    header('Location: formu.php')
    ?>
</body>
</html>