
74 lines (72 sloc) 3.67 KB
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inserte un dato</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2>Insertar Producto</h2>
            <form action="insertar.php" method="post">
                <div class="form-group">
                    <label for="producto">Id Producto</label>
                    <input type="text" class="form-control" name="producto" id="producto" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" required>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad" id="cantidad" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" class="form-control" name="precio" id="precio" required>
                </div>
                <div class="form-group">
                    <label for="proveedor">Proveedor</label>
                    <select name="proveedor" class="form-control" >
                        <?php
                        $conexion = mysqli_connect("localhost", "root", "", "bdejemplo") 
                            or die("Problemas de conexion");
                        $registros = mysqli_query($conexion, "SELECT idProveedor, nombre FROM proveedores")
                            or die("Problemas en el select".mysqli_error($conexion));
                            //conseguimos el id y nombre del proveedor
                        while ($reg = mysqli_fetch_array($registros)) {
                            echo "<option value='$reg[idProveedor]'>$reg[nombre]</option>";
                        }
                        //reg tendrá los valores de id y nombre conseguidos en el select
                        //obteniendo el id mostrará el Nombre
                    //esto lo hacemos para que si agregamos a workbench nuevos datos, se actualicen
                    //aquí también 
                        ?>
                    </select>
                </div>
                <p>
                    <input type="submit" class="btn btn-primary btn-block" value="Insertar">
                </p>
            </form>
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
</html>