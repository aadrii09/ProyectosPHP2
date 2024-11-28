<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificacion por edades</title>
</head>
<body>
    
    <form action="">
        <label for="">Introducir edades</label>
        <br>
<?php        
        for ($i = 0; $i < 5; $i++) {

echo "<input type= 'text' name='pedirEdad[]'> <br>";

}

?>
<input type="submit" name="enviar" id="">
    </form>


<?php

if (isset($_GET["pedirEdad"])){

    $edades = array_map("intval", $_GET["pedirEdad"]);
    

    foreach ($edades as $valor) {   
        if ($valor < 18) {
            echo" $valor es menor <br>";
            
        }else if ($valor >=18&&$valor<=35 ) {
        echo "$valor es joven <br>";
        }else if($valor > 35){
            echo "$valor es adulto <br>";
        }
    }


}


?>

</body>
</html>