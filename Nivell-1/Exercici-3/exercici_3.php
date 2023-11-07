<?php

$X = 3;
$Y = 7;
$N = 4.23;
$M = 6.72;

echo "El valor de la variable \$X es: " . $X . "<br />";
echo "El valor de la variable \$Y es: " . $Y . "<br />";

echo "La suma de \$X i \$Y es: " . $X + $Y . "<br />";
echo "La resta de \$X i \$Y es: " . $X - $Y . "<br />";
echo "La multiplicació de \$X i \$Y es: " . $X * $Y . "<br />";
echo "El mòdul de \$X i \$Y es: " . $X % $Y . "<br />";

echo "El valor de la variable \$N es: " . $N . "<br />";
echo "El valor de la variable \$M es: " . $M . "<br />";

echo "La suma de \$N i \$M es: " . $N + $M . "<br />";
echo "La resta de \$N i \$M es: " . $N - $M . "<br />";
echo "La multiplicació de \$N i \$M es: " . $N * $M . "<br />";
echo "El mòdul de \$N i \$M es: " . $N % $M . "<br />";

echo "El doble de \$X es: " . $X * 2 . "<br />";
echo "El doble de \$Y es: " . $Y * 2 . "<br />";
echo "El doble de \$N es: " . $N * 2 . "<br />";
echo "El doble de \$M es: " . $M * 2 . "<br />";

echo "La suma de \$X, \$Y, \$N y \$M es igual a: " . $X + $Y + $N + $M . "<br />";
echo "La multiplicació de \$X, \$Y, \$N y \$M es igual a: " . $X * $Y * $N * $M . "<br />";

// Funció Calculadora

function Calculadora($pNum1, $pNum2, $operacio) {
    switch($operacio) {
        case "suma":
            echo "La suma de $pNum1 i $pNum2 es " . $pNum1 + $pNum2 . "<br />";
            break;
        case "resta":
            echo "La resta de $pNum1 i $pNum2 es " . $pNum1 - $pNum2 . "<br />";
            break;
        case "multiplicació":
            echo "La multiplicació de $pNum1 i $pNum2 es " . $pNum1 * $pNum2 . "<br />";
            break;
        case "divisió":
            echo "La divisió de $pNum1 i $pNum2 es " . $pNum1 / $pNum2 . "<br />";
            break;
        default:
            echo "Operació no disponible";
    }
}

Calculadora(9, 3, "multiplicació");
Calculadora(17, 22.845, "suma");
Calculadora(67, 4, "divisió");
Calculadora(6452, 24, "resta");
