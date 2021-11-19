<?php
/*Aplicación No 9 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado. */
$r = rand(0,255);
$g = Rand(0,255);
$b = Rand(0,255);
    
echo  '<body style="background-color:' . "rgb($r, $g, $b)" . '">';
$acumulador=0;
$array[5] = array();//inicializacion basica, reserva cinco espacios vacios

for($i = 0; $i < count($array); $i++)
{
    $array[$i] = (rand(0, 10));//voy inicializando componente a componente
    $acumulador+= $array[$i];
}

for($i = 0; $i < count($array); $i++)
{
    echo $array[$i] . "<br>";

}

if(($promedio= $acumulador/count($array)) > 6)
{
    echo "el promedio es mayor a seis : " . $promedio ."<br>";
}
else
{
    echo "el promedio NOOOO es mayor a seis : " . $promedio ."<br>";
}

?>