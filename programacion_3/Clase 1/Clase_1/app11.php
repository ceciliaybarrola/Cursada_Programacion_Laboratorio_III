<?php
$r = rand(0,255);
$g = Rand(0,255);
$b = Rand(0,255);
    
echo  '<body style="background-color:' . "rgb($r, $g, $b)" . '">';

/* Aplicación No 11 (Carga aleatoria)
Imprima los valores del vector asociativo siguiente usando la estructura de control foreach:
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';*/

$array= array(1=>90, 30=>7, 'e'=>99, 'hola'=> 'mundo');

var_dump($array);

foreach($array as $item)
{
    echo  $item . "<br>"; 
}


?>