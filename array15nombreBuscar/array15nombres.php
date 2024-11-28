<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array de 15 nombres y buscarlos por letras o palabras</title>
</head>
<body>
    <h1>Crearéis un array con 15 nombres de libros y por pantalla se pedirá que se
introduzcan una palabra, letra, o conjunto de letras y se imprimirán todos
los títulos que lo contengan.</h1>
    
<form action="">
    <label for="">Introduce palabras o letras para imprimir un titulo</label>
    <br>
    <input type="text" name="palabraLetra">
    <input type="submit" name="enviar" id="">
</form>

<?php

if(isset($_GET["palabraLetra"])){

    $palabraLetra = $_GET["palabraLetra"];


    $array = ["tecnología", "innovación", "desarrollo", "programación", "diseño", "creatividad", "frontend", "backend", "software", "hardware", "proyecto", "código", "aprendizaje", "experiencia", "rendimiento"];

    foreach ($array as $palabraGuardada ) {
        //en el haystack va el nombre de la variable llamada $palabraGuardada que es cada palabra del array
        //y el needle por lo que se filtra
        if (str_contains($palabraGuardada, $palabraLetra)) {
            echo "$palabraGuardada";
        }
    }


















}




?>



</body>
</html>