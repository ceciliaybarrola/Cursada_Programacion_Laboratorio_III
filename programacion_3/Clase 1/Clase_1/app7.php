<?php
/*Aplicación No 7 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple. */
echo date("d/m/y");// 22/03/21
echo "<br>";
echo date("d F Y");// 22 march 2021
echo "<br>";
echo date("g:i A");// 7:48 PM
echo "<br>";
echo date("c");// 2021-03-22T19:51:40+01:00
echo "<br>";
echo date("r");// Mon, 22 Mar 2021 19:51:40 +0100
echo "<br>";

$numeroDeMes= date("m");
switch($numeroDeMes)
{
    case 1:
    case 2:
    case 3:
        echo "Es Verano";
        break;
    case 4:
        break;
    case 5:
        break;
    case 6:
        echo "Es Otoño";
        break;
    case 7:
        break;
    case 8:
        break;
    case 9:
        echo "Es Invierno";
        break;
    case 10:
        break;
    case 11:
        break;
    case 12:
        "Es Primavera";
        break;  
}




?>