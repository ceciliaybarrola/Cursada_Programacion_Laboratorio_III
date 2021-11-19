<?php

/*
Aplicación No 6 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.
*/
$operador= "+";
$op1= 25;
$op2= 13;

switch($operador)
{
    case "+":
        echo "la suma es: ". $op1 + $op2 . "<br>";
        break;
    case "-":
        echo "la resta es: ". $op1 - $op2. "<br>";
        break;
    case "*":
        echo "la multiplicacion es: ". $op1 * $op2. "<br>";
        break;
    case "/":
        echo "la division es: ". $op1 / $op2. "<br>";
        break;
}




?>