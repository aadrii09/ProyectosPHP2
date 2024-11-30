<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindromo</title>
</head>
<body>
    <form action="">
        <label for="">Escriba algo</label>
        <input type="text" name="texto" id="">
        <input type="submit" name="enviar" id="">
    </form>

    <?php 
    
    if(isset($_GET["texto"])){

        $texto=$_GET["texto"];

        if($texto== strrev($texto)){
        echo "$texto es un polindromo";
        }else{
            echo"$texto no es polindromo";
        }
    }
    ?>
</body>
</html>