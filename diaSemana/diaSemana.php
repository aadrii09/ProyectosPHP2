<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia de la semana</title>
</head>
<body>
    <h1>Escribe un script que pida por pantalla un día de la semana y que diga qué
asignatura toca a primera hora ese día, el mensaje será “Hoy es lunes y
vamos a estudiar NOMBREDELAMATERIA</h1>

<form action="">
    <label for="">dia de la semana</label>
    <input type="text" name="diaSemana">
    <input type="submit" name="enviar" id="">
</form>

<?php



if(isset( $_GET["diaSemana"] )){
    $diaSemana= $_GET["diaSemana"];
    $arrayAsignaturas=array(
        "lunes"=>"Despliegue de aplicaciones web"
        ,"martes"=>"Backend"
        ,"miercoles"=>"Backend"
        ,"jueves"=>"Fronted"
        ,"viernes"=>"Empresas"
        ,"sabado"=>"Nada"
        ,"domingo"=>"Nada"
        );
    //para q lo pase a minusculas
    $diaSemanaMinusculas = strtolower( $diaSemana );
    //con esto comprobamos que lo que puso el usuario en el inp esta dentro del array
    if(array_key_exists($diaSemanaMinusculas,$arrayAsignaturas)){
        //aqui con el nombre de asignatura estoy cogiendo el valor del igual de dia de la semana(martes=backend)
        $asignatura = $arrayAsignaturas[$diaSemanaMinusculas];
        echo"el $diaSemanaMinusculas toca $asignatura ";
    }else{
        echo "ese dia de la semana no existe";
    }
}





?>

</body>
</html>