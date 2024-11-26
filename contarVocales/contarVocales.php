<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Vocales</title>
</head>
<body>
    <h1>Introduce un texto para saber cuantas vocales hay de cada una, mostrandolas en una tabla</h1>
<form action="">
    <label for="">Primer texto</label>
    <textarea name="textarea1" id=""></textarea>
    <label for="">Segundo texto</label>
    <textarea name="textarea2" id=""></textarea>
    <input type="submit" name="Enviar" id="">
</form>

<?php
//aqui comprobamos los valores que pasan por el formulario
if (isset($_GET["textarea1"])&& isset($_GET["textarea2"])) {

//para pillar los valores del name del input
    $valorTextArea1 = $_GET["textarea1"];
    $valorTextArea2 = $_GET["textarea2"];

    $textarea1_a= substr_count( $valorTextArea1,"a");
    $textarea1_e= substr_count( $valorTextArea1,"e");
    $textarea1_i= substr_count( $valorTextArea1,"i");
    $textarea1_o= substr_count( $valorTextArea1,"o");
    $textarea1_u= substr_count( $valorTextArea1,"u");

    $textarea2_a= substr_count( $valorTextArea2,"a");
    $textarea2_e= substr_count( $valorTextArea2,"e");
    $textarea2_i= substr_count( $valorTextArea2,"i");
    $textarea2_o= substr_count( $valorTextArea2,"o");
    $textarea2_u= substr_count( $valorTextArea2,"u");


    echo"<table>
         <tr>
         <th>Texto</th>       
         <th>a</th>     
         <th>e</th>     
         <th>i</th>     
         <th>o</th>     
         <th>u</th>     
         </tr>
         <tr>
         <td>Texto1</td>       
         <td> $textarea1_a</td>     
         <td> $textarea1_e</td>     
         <td> $textarea1_i</td>     
         <td> $textarea1_o</td>     
         <td> $textarea1_u</td>     
         </tr> 
         <tr>
         <td>Texto2</td>       
         <td> $textarea2_a</td>     
         <td> $textarea2_e</td>     
         <td> $textarea2_i</td>     
         <td> $textarea2_o</td>     
         <td> $textarea2_u</td>     
         </tr> 
         </table>";
   
         

}


?>
</body>
</html>