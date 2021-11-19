<?php
$r = rand(0,255);
$g = Rand(0,255);
$b = Rand(0,255);
    
echo  '<body style="background-color:' . "rgb($r, $g, $b)" . '">';

/* Aplicación No 10 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.*/

$array[10]= array();
$j=0;
for ($i=0; $i<10; $i++)
{
    do{
        $j++;
        $array[$i]= $j;
    }while( $j % 2 == 0);
}

foreach($array as $item)
{
    echo $item . "<br>";
}

echo "<br>";

$i=0;
while($i<10)
{
    echo $array[$i] . "<br>";

    $i++;
}


?>