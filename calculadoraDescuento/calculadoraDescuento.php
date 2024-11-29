<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de descuentos</title>
</head>
<body>
    <form action="">

<label for="">Precio del producto</label>
<input type="number" name="precioProducto" id="">
 <br>
<label for="">%DESCUENTO%</label>
<input type="number" name="descuento" id="">
<br>
<input type="submit" name="enviar" id="">

    </form>

    <?php

if (isset($_GET["precioProducto"])&&isset($_GET["descuento"])){

    $precioProducto=$_GET["precioProducto"];
    $descuento=$_GET["descuento"];

    $operacion1=($precioProducto*$descuento)/100;
    $operacion2=($precioProducto-$operacion1);

    echo"el precio es $operacion2 € ";

}

    ?>

</body>
</html>