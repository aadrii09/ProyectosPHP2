<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScriptComparar10nums</title>
</head>
<body>
    <h1>Crea un script que compare 10 números generados de forma aleatoria y
    nos diga cuáles son positivos y cuáles son negativos.</h1>
    <?php

    
for ($i = 0; $i < 10; $i++){
    //estamos creando con la funcion mt_rand un numero aleatorio entre -100 100 pero como esta dentro del
    //for crea 10 numeros aleatorios
   $num = mt_rand(-100, 100);
    //esto es mejor q un if else y oara hacerlo hay que crear una variable
   $positivoNegativo=($num < 0)?"$num es negativo":"$num es positivo";
   echo"$positivoNegativo <br>";
}



?>
</body>
</html>