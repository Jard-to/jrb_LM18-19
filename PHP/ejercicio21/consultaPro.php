<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>consultaPRO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
         $conexion = mysqli_connect("localhost", "root", "root", "productos") or die("Problemas de conexión");
        $registros = mysqli_query($conexion, "SELECT Produ.idProducto,Produc.descripcion,Produc.cantidad,Produc.precio,Prove.nombre
         FROM productos as Produ inner join proveedores as Prove") or die("Problemas en la consulta:".mysqli_error($conexion));
        
        while ($reg=mysqli_fetch_array($registros)) {
            echo "Nombre: " . $reg['Nombre'] . "<br/>";
            echo "idProductos: " . $reg['idProductos'] . "<br/>";
            echo "descripcion: " . $reg['descricion'] . "<br/>";
            echo "cantidad: " . $reg['cantidad'] . "<br/>";
            echo "precio: " . $reg['precio'] . "<br/>";
            
        }
        ?>
        <div class="container">
            <?php
           $idProducto = trim(htmlspecialchars($_REQUEST["idProducto"], ENT_QUOTES, "UTF-8"));
           $nombre = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));
           $descripcion = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));
           $cantidad = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));
            mysqli_query($conexion, 
            "INSERT INTO producto VALUES ('$nombre','$idProducto',$descripcion ,)")
            or die("Problemas en el insert".mysqli_error($conexion));
        </div>
        mysqli_close($conexion);
       ?>
</body>
</html