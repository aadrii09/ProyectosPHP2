<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Media</title>
</head>
<body>
    <form action="">
        <label for="">Introducir Notas</label>
        <?php
        for ($i = 0; $i < mt_rand(1,10); $i++) {
          echo" <br>  <input type='number' name='notaIntroducida[]'>";
        }
        ?>
        <input type="submit" name="Enviar" id="">
    </form>

    <?php
if(isset($_GET["notaIntroducida"])){

    $notas = array_map("intval", $_GET["notaIntroducida"]);
    $cantidad = count($notas);
    $sumaNotas = array_sum($notas)/$cantidad;

    
    echo"la media es $sumaNotas <br>";

    if($sumaNotas >= 5){
        echo"$sumaNotas aprobado";
    }elseif($sumaNotas<5){
        echo"$sumaNotas suspenso";    
    }
}
    ?>


</body>
</html>