<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

<h1>Hola</h1>
<h2>Hola</h2>
<h3>Hola</h3>
<h4>Hola</h4>
<h5>Hola</h5>
<h6>Hola</h6>

<p>parrafo cualquiera</p>

<table>
    <tr><td>Nombre</td><td>Apellido</td><td>edad</td></tr>
    <tr><td>Domingo</td><td>Carvajal</td><td>20</td></tr>
    <tr><td>Constanza</td><td>Ortiz</td><td>21</td></tr>
</table>

<?php
#Para definir variables que pueda ser utilizada en todo el HTML se deben anteceder con $
$var1 = 20;
$booleano = true;
$string = "palabra mágica";

#Para imprimir en el HTML ocupamos echo
echo "<p> Las variables son:<br> Var1: $var1 <br> booleano: $booleano</p>";

#Control de flujo
if ($booleano){
    echo "<h4> Dentro del if: la variable era TRUE.</h4>";
} else {
    echo "<h4> Dentro del if: la variable era FALSE.</h4>";
}

#Looping. Hay varios tipos de looping. Investigar!
echo "<h3>For Loop:</h3>";
for($i = 0; $i<6; $i++) {
  echo "<p> i: $i </p>";
}

echo "<h3>Foreach Loop:</h3>";
$array = array( 1, 2, 3, 4, 5);
foreach( $array as $v ) {
   echo "<p> Value is: $v </p>";
}
$array2 = array(
    "foo" => "bar",
    "bar" => "foo",
);
// $array2['ewe'] = 'uwu'
?>
<table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <?php

        foreach ($array2 as $key => $value){
            echo"<tr><td>$key</td><td>$value</td></tr>";
        }

        ?>
    </table>


</body>
</html>
