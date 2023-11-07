<?php


function grau($nota) {
    if($nota >= 60) {
        echo "Tens un grau de Primera Divisió.<br />";
    } elseif($nota >= 45 && $nota <= 59) {
        echo "Tens un grau de Segona Divisió.<br />";
    } elseif($nota >= 33 && $nota <= 44) {
        echo "Tens un grau de Tercera Divisió.<br />";
    } elseif($nota < 33) {
        echo "Estas reprovat.<br />";
    }
}


grau(41);
grau(73);
grau(21);
grau(59);