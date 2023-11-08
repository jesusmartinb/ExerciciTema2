<?php

function quantitatTotalPagar($temps, $tempsEstabliment = 3, $tasa1 = 0.10, $tasa2 = 0.05) {
    // $temps -> Duración de la llamada en segundos
    // $tempsEstabliment -> Tiempo disponible por establecimiento de llamada en minutos
    // $tasa1 -> Tasa por el establecimiento de llamada en €
    // $tasa2 -> Tasa por paso, que se corresponde por minuto adicional al establecimiento de llamada

    // Se pasan los segundos de la llamada a mínutos
    $tempsMin = ceil($temps / 60);

    if($tempsMin <= $tempsEstabliment) {
        echo "El cost de la trucada es de: " . $tasa1 . "€<br/>";
    }elseif($tempsMin > $tempsEstabliment) {
        $pasos = $tempsMin - $tempsEstabliment;
        echo "El cost de la trucada es de: " . ($pasos * $tasa2 + $tasa1) . "€<br/>";
    }
}

quantitatTotalPagar(75);
quantitatTotalPagar(180);
quantitatTotalPagar(181);
quantitatTotalPagar(240);
quantitatTotalPagar(241);
quantitatTotalPagar(427);
quantitatTotalPagar(788);
