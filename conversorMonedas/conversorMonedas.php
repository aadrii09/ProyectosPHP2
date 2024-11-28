<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de monedas</title>
</head>
<body>

<?php

$arrayDivisas= array("Dolar"=>1.09, 
                    "Libra"=>0.88 , 
                    "Peso Mexicano"=>19.67);
                    

?>




<form action="">

<label for="">Introduce Cantidad</label>
        <select name="cambio" id="">

        <?php
        //con el =>$value hacemos que el dolar tenga el valor 1.09 dado
        foreach ($arrayDivisas as $key =>$value) {
            ?>
            <option value="<?php echo $key; ?>">
                <?php echo $key; ?>
            </option>
            <?php
        }
        ?>

        </select>
        <input type="number" name="cantidad" id="">
        <input type="submit" name="Enviar" id="">
</form>

<?php

if(isset($_GET["cantidad"])&&isset($_GET["cambio"])){

$cantidad=$_GET["cantidad"];
$cambio=$_GET["cambio"];

//este if comprueba que la key existe en el array
if(array_key_exists($cambio,$arrayDivisas)){
    //con esto estoy guardando el valor de la divisa
    $calculo = $arrayDivisas[$cambio];
    $calculoFinal = $calculo * $cantidad;
    echo"el cambio es $calculoFinal";


}

}


?>





    
</body>
</html>