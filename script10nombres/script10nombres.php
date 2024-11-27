<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script que pida 10 nombres</title>
</head>
<body>
    <h1>Crear un script que pida 10 nombres de persona y que muestre por
pantalla los que empiecen por una letra dada que se solicitará por pantalla.
</h1>
<form action="">
    <article>
    <label for="">Nombres</label>
    <div>
    <input type="text" name="nombre0" id="">
    </div>
    <div>
    <input type="text" name="nombre1" id="">
    </div>
    <div>
    <input type="text" name="nombre2" id="">
    </div>
    <div>
    <input type="text" name="nombre3" id="">
    </div>
    <div>
    <input type="text" name="nombre4" id="">
    </div>
    <div>
    <input type="text" name="nombre5" id="">
    </div>
    <div>
    <input type="text" name="nombre6" id="">
    </div>
    <div>
    <input type="text" name="nombre7" id="">
    </div>
    <div>
    <input type="text" name="nombre8" id="">
    </div>
    <div>
    <input type="text" name="nombre9" id="">
    </div>
    </article>


    <article>
    <label for="">Inicial</label>
    <input type="text" name="inicial" id="">
    </article>
    <input type="submit" name="Enviar" id="">

</form>

<?php

if (isset($_GET["nombre0"])&& isset($_GET["nombre1"])&& isset($_GET["nombre2"])&& isset($_GET["nombre3"])
&& isset($_GET["nombre4"])&& isset($_GET["nombre5"])&& isset($_GET["nombre6"])&& isset($_GET["nombre7"])
&& isset($_GET["nombre8"])&& isset($_GET["nombre9"])&& isset($_GET["inicial"])){


$inicial = $_GET["inicial"];


$nombre0 = $_GET["nombre0"];

$nombre1 = $_GET["nombre1"];

$nombre2 = $_GET["nombre2"];

$nombre3 = $_GET["nombre3"];

$nombre4 = $_GET["nombre4"];

$nombre5 = $_GET["nombre5"];

$nombre6 = $_GET["nombre6"];

$nombre7 = $_GET["nombre7"];

$nombre8 = $_GET["nombre8"];

$nombre9 = $_GET["nombre9"];


if($nombre0[0] == $inicial){
    echo"$nombre0","<br>";
}else {
    echo "No empieza por esa inicial <br>";
}
if($nombre1[0] == $inicial){
    echo "<br>","$nombre1 ","<br>" ;
}else {
    echo "<br>No empieza por esa inicial<br>";
}
if($nombre2[0] == $inicial){
    echo "<br>$nombre2 <br>";
}else {
    echo "<br>No empieza por esa inicial<br>";
}
if($nombre3[0] == $inicial){
    echo "<br>$nombre3 <br>";
}else {
    echo "<br>No empieza por esa inicial<br>";
}
if($nombre4[0] == $inicial){
    echo "<br>$nombre4 <br>";
}else {
    echo "<br>No empieza por esa inicial<br>";
}
if($nombre5[0] == $inicial){
    echo "<br>$nombre5 <br>";
}else {
    echo "<br>No empieza por esa inicial<br>";
}
if($nombre6[0] == $inicial){
    echo "<br>$nombre6 <br>";
}else {
    echo "<br>No empieza por esa inicial<br>";
}
if($nombre7[0] == $inicial){
    echo "<br>$nombre7 <br>";
}else {
    echo "<br>No empieza por esa inicial<br>";
}
if($nombre8[0] == $inicial){
    echo "<br>$nombre8 <br>";
}else {
    echo "<br>No empieza por esa inicial<br>";
}
if($nombre9[0] == $inicial){
    echo  "<br>$nombre9 ";
}else {
    echo "<br>No empieza por esa inicial<br>";
}

}












/* //para las letras iniciales

if (isset($_GET["inicial"])){

    $inicial = $_GET["inicial"];

    foreach(range('a','z') as $i) {
        if($inicial == $i) {
          echo $i;
        }
      }
    
    
  

} */


?>



</body>
</html>