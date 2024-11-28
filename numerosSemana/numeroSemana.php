<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escribir un numero del 1 al 7 y decir que dia de la semana cae</title>
</head>
<body>
    <form action="">
        <label for="">Elija un nombre del 1-7</label>
        <input type="text" name="diaSemana" id="">
        <input type="submit" name="" id="">

<?php
$arrayDiaSemana=array(
    1=>"Lunes"
    ,2=>"Martes"
    ,3=>"Miercoles"
    ,4=>"Jueves"
    ,5=>"Viernes"
    ,6=>"Sabado"
    ,7=>"Domingo"
    );



if(isset($_GET["diaSemana"])){
    $diaSemana=$_GET["diaSemana"];

    if(array_key_exists($diaSemana,$arrayDiaSemana)){
        $elDiaDeLaSemanaEs = $arrayDiaSemana[$diaSemana];
        echo"el dia es $elDiaDeLaSemanaEs";
    }else{
        echo"$diaSemana no esta comprendido entre 1-7";
    }
}

?>

    </form>
</body>
</html>