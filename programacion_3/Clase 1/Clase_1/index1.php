<?php
echo "Hola Mundo<br>";
echo "<br>";
printf("http://localhost/programacion_3/Clase_1/<br>");

#comentario
// otro comentario
/*
muchos comentarios
*/

//phpinfo();

$nombre = "Cecilia";
$apellido = "Ybarrola";
$sueldo = "-15.26";
echo $apellido . ", " .$nombre . "<br>";
printf("mi sueldo es %f<br>", $sueldo);
$sueldo = "mi salario es malo"; 
 #al usar las etiquetas/mascaras tengo que chequear el contenido de las variables 
printf("mi sueldo esta mal %f<br>", $sueldo);

$numero = 8;
if("8" == $numero)
{
    echo "es 8<br>";
}
$numero = 8;
if("8" === $numero)
{
    echo "es 8 y son del mismo tipo<br>";
}
else
{
    echo "es 8 y son de distinto tipo<br>";
}

$array = array(1,2,3,"4",5);

var_dump($array);

echo "<br>";

for($i = 0; $i < count($array); $i++)
{
    echo $array[$i] . "<br>";

}
echo "<br>";

$array[1]= "salala";
$array[5]= "salala 2.0";
foreach($array as $item)
{
    echo $item . "<br>";
}

$arrayAsociativo= array("uno" => 1, "dos" => 2);
$arrayAsociativo["tres"]= 3;
array_push($arrayAsociativo , "probando, probando");
foreach($arrayAsociativo as $item)
{
    echo $item . "<br>";
}




?>