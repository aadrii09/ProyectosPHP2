<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Intereses Anuales</title>
</head>
<body>
    <form action="">
        <label for="">Cantidad Inicial</label>
        <input type="number" name="cantidadInicial" id="">
        <br>
        <label for="">Porcentaje Intereses</label>
        <input type="number" name="interes" id="">
        <br>
        <label for="">Numero de años</label>
        <input type="number" name="anhos" id="">
        <br>
        <input type="submit" name="enviar" id="">
    </form>

<?php
if(isset($_GET["cantidadInicial"])&&isset( $_GET["interes"])&&isset( $_GET["anhos"])){

    $cantidadInicial=$_GET["cantidadInicial"];
    $interes=$_GET["interes"];
    $anhos=$_GET["anhos"];

    $operacion= ($cantidadInicial*$interes*$anhos)/100;
    $operacion2= $operacion + $cantidadInicial;
    echo"el valor seria $operacion2";

}

?>

</body>
</html>