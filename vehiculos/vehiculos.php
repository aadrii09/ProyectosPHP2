<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos</title>
</head>
<body>
        <form action="">
            <label for="">peso máximo autorizado</label>
            <input type="text" name="pesoAutorizado" id=""><br>
            <label for="">peso vehiculo</label>
            <?php
            for ($i = 0; $i < mt_rand(1,10); $i++) {
             echo"   <input type='text' name='pesoVehiculo[]'><br>";
        }
        ?>
            <input  id="">
            <input type="submit" name="" id="">
        </form>

        <?php

    if (isset($_GET["pesoAutorizado"])&& isset($_GET["pesoVehiculo"])){
        $pesoAutorizado = $_GET["pesoAutorizado"];
        $pesoVehiculo = $_GET["pesoVehiculo"];

        if($pesoVehiculo <= $pesoAutorizado  ){
            echo"<p style='color:green'>Vehiculo puede pasar</p>";
        }else{
            echo "<p style='color:red'>Vehiculo demasiado pesado </p>";
        }
    }
        ?>
</body>
</html>