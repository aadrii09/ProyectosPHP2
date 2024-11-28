<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedir 20 Numeros</title>
</head>
<body>
    <h1>Escribe un script que pida 20 números por pantalla mediante un
formulario y que después muestre los números introducidos en vertical,
junto con las palabras máximo y mínimo al lado del máximo y el mínimo
respectivamente.</h1>

<form action="">

<?php

for ($i = 0; $i < 20; $i++) {

    echo "<input type= 'text' name='pedirNumeros[]'> <br>";
    
}

?>

<input type= 'submit' name='enviar'>
</form>


<?php
// con esto comprobamos que hay numeros inntroducidos
if (isset($_GET["pedirNumeros"])){
/* asi se haria si solo fuesee un valor
    $valor = $_GET["pedirNumeros"]; */
//cada vez que se haga un for en el input hay que hacer un array_map para pillar los valores introducidos en los input
    $valores = array_map("intval", $_GET["pedirNumeros"]);
    // esto es para imprimir arrays,  con el echo no se puede
    print_r($valores);
    echo"<br>";
    $maximo=max($valores);
    $minimo=min($valores);
    // para recorrer un array usamos un foreach y el segundo $ puedo llamarle de cuaquier forma pero el primero $ es el nombre del array
    foreach ($valores as $valor) {   
        if ($valor == $maximo) {
            echo"$valor es el maximo <br>";
            
        }else if ($valor == $minimo) {
        echo "$valor es el minimo <br>";
        }else{
            echo "$valor <br>";
        }
    }

}






?>


</body>
</html>