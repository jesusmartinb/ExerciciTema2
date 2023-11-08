<?php

function isBitten() {
    $probabilitat = rand(0, 100);

    if($probabilitat >= 50) {
        return TRUE;
    } else {
        return FALSE;
    }
}

echo "Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.<br/>";

echo "¿Charlie ta mossegat? " . (isBitten() ? "True" : "False");