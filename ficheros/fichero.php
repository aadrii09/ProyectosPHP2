<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichero</title>
</head>
<body>
    <form action="">
        <input type="submit" name="enviar" id="">
    </form>
    <?php
    $vara=0;
    $varp=0;
    $vari=0;
    $cont=0;
    $fichero= fopen('texto.txt','r');
    while ($line=fgets($fichero)) {
        $cont++;
        $vara+=substr_count($line,'a');
        $varp+=substr_count($line,'p');
        $vari+=substr_count($line,'i');
    }
    fclose($fichero);   

    echo"Numero de a $vara";
    echo"<br>";
    echo"Numero de p $vari";
    echo"<br>";
    echo"Numero de i $varp";
    echo"<br>";
    ?>
</body>
</html>