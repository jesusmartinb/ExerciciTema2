<?php

function comptar($pas, $fins = 10) {
    for($i = 1; $i < $fins; $i += $pas) {
        echo $i . "<br />";
    }
}

comptar(2);
comptar(4, 50);
comptar(10, 100);