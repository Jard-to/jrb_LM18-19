
55 lines (49 sloc) 2.69 KB
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Insertar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php
            $producto = trim(htmlspecialchars($_REQUEST["producto"], ENT_QUOTES, "UTF-8"));
            $descripcion = trim(htmlspecialchars($_REQUEST["descripcion"], ENT_QUOTES, "UTF-8"));
            $cantidad = trim(htmlspecialchars($_REQUEST["cantidad"], ENT_QUOTES, "UTF-8"));
            $precio = trim(htmlspecialchars($_REQUEST["precio"], ENT_QUOTES, "UTF-8"));
            $proveedor = trim(htmlspecialchars($_REQUEST["proveedor"], ENT_QUOTES, "UTF-8"));
            //obtenemos los datos introducidos en el formulario de insercción
            //ahora iniciamos la conexión con la bd
            $conexion = mysqli_connect("localhost", "root", "", "bdejemplo") 
                or die("Problemas de conexión");
            mysqli_query($conexion, "INSERT INTO productos(idProductos, descripcion, cantidad, precio, idProveedor) VALUES ('$producto','$descripcion',$cantidad,$precio,$proveedor)") 
                or die("Problemas en el insert".mysqli_error($conexion));
                //agregamos a la tabla los valores obtenidos de la consulta de insercción
                //$producto es el ID de producto xd
            mysqli_close($conexion);
            //cerramos la conexión y ahora avisamos que se ha añadido el producto.
            print "<h2>Producto añadido</h2>"
            ?>
        </div>
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
    </body>
</html