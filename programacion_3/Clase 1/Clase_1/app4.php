<?php

/*Aplicación No 4 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.
*/

$suma = 0;
$contador = 0;

do
{
    $contador++;
    $suma += $contador;
    echo $suma . "<br>";

}while($suma < 1000);
echo "cantidad de veces que se sumo: " . $contador . "<br>";




?>