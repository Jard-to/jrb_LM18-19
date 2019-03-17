<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tabla de productos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">

<!-- Realice el siguiente ejercicio:
1. Muestra una consulta de todos los productos de la tabla productos 
mostrando el nombre completo del proveedor del producto. 
2. Además, muestre un mensaje indicando el precio total de todos los productos y la cantidad de productos 
que tenemos en stock. 
3. Añade un botón para insertar un producto en la base de datos.
Muestra en el formulario todos los proveedores que existen en la tabla de proveedores.-->

<?php
$conexion = mysqli_connect("localhost", "root", "", "bdejemplo")
or die("Problemas con la conexión");
$registros = mysqli_query($conexion,
"SELECT pro.idProductos, pro.descripcion, pro.cantidad, pro.precio, pro.idProveedor,
SUM(pro.precio) as Precio_total, SUM(pro.cantidad) as Cantidad_total, prov.nombre
from productos as pro inner join proveedores as prov on pro.idProveedor = prov.idProveedor ")
or die ("Problemas en la consulta:" .mysqli_error($conexion));
//aparecerán todas las filas de la bd que cumplan la condicion
echo "<table class='table table-striped'>";
while ($reg = mysqli_fetch_array($registros)) //añade a reg lo devuelto en la consulta
{
    echo "<tr><th>Id de producto</th>
    <th>Descripción</th>
    <th>Proveedor</th></tr>";
echo "<tr>";
echo "<td> " . $reg['idProductos'] ;
echo "<td> " . $reg['descripcion'] ;
echo "<td> " . $reg['nombre'] ;
echo "</tr>";
echo "</table>";
echo "<p>Precio total: " . $reg['Precio_total'] . " €.</p>";
echo "<p>Cantidad Stock: " . $reg['Cantidad_total'] . " unidades.</p>" ;
}
mysqli_close($conexion);
?>

<!-- tenemos que crear un boton para ir a crear producto nuevo en un formulario nuevo -->

<a class="btn btn-primary" href="consultainsertar.php" role="button"> Insertar producto </a>;
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>