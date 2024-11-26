<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combrobar imputs</title>
</head>
<body>
    <h1>Comprobar que lo introducido en los inputs concuerde con el formato del imput</h1>

    <?php
    $telefonos = array("Grecia"=> "+30","Paises Bajos"=> "+31","Belgica"=> "+32",
    "Francia"=> "+33","España"=> "+34","Portugal"=> "+351",
    "Autria"=> "+43","Reino Unido"=> "+44","Dinamarca"=> "+45",
    "Suecia"=> "+46", "Noruega"=> "+47", "Polonia"=> "+48", 
    "Alemaña"=> "+49", "Rusia"=> "+7","Hungria"=> "+36");
    ?>
    <form action="">
        <label for="">nombre</label>
        <input type="text" name="nombre" id="">
        <label for="">apellido</label>
        <input type="text" name="apellido" id="">
        <label for="">telefono</label>
        <select name="prefijo" id="">

        <?php
        foreach ($telefonos as $key) {
            ?>
            <option value="<?php echo $key; ?>">
                <?php echo $key; ?>
            </option>
            <?php
        }
        ?>

        </select>
        <input type="tel" name="telefono" id="">
        <label for="">email</label>
        <input type="email" name="email" id="">
        <label for="">fecha</label>
        <input type="date" name="fecha" id="">
        <label for="">alias</label>
        <input type="text" name="alias" id="">
        <input type="submit" name="Enviar" id="">

    </form>

    <?php
    if(isset($_GET["nombre"]) && isset($_GET["apellido"]) && isset($_GET["telefono"]) &&
    isset($_GET["email"]) && isset($_GET["fecha"]) && isset($_GET["alias"]) && isset($_GET["prefijo"])){

            $nombre = $_GET["nombre"];
            $apellido = $_GET["apellido"];
            $telefono = $_GET["telefono"];
            $email = $_GET["email"];
            $fecha = $_GET["fecha"];
            $alias = $_GET["alias"];
            $prefijo = $_GET["prefijo"];

            $correoValido = "";
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $correoValido = "correoNoValido";
            }else{
                $correoValido = $email;
            }

            $telefonoValido = "";
            $telefonoPrefijo = $prefijo . ' ' . $telefono;
        if((preg_match('/^[0-9]{9}+$/', $telefono))) {
            $telefonoValido = $telefonoPrefijo;
        }else{
            $telefonoValido = "numero no valido";
        }

            $fechaValida ="";
            $fechaActual = new DateTime();
            if ($fecha > $fechaActual) {
            $fechaValida = "fecha no valida";
            }else{
                $fechaValida =  $fechaActual->format('Y-m-d');
            }

            
            echo"<p>nombre:$nombre</p>
                <p>apellido:$apellido</p>
                <p>telefonoValido:$telefonoValido</p>
                <p>correoValido:$correoValido</p>
                <p>fechaValida:$fechaValida</p>
                <p>alias:$alias</p>";

    }

    ?>


</body>
</html>