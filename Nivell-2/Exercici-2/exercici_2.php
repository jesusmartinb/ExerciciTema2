<?php
// es crean les variables
$xocolataqty = (int) trim($_POST['xocolataqty']);
$xicletsqty = (int) trim($_POST['xicletsqty']);
$caramelsqty = (int) trim($_POST['caramelsqty']);
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botiga - Resultat de la Comanda</title>
</head>
<body>
    <h1>Botiga Tot Dolç</h1>
    <h2>Resultat de la Comanda</h2>
    <?php
    date_default_timezone_set("UTC + 1"); 
    $meses = [1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"];
    $dias = [0 => "Diumenge", 1 => "Dilluns", 2 => "Dimarts", 3 => "Dimecres", 4=> "Dijous", 5 => "Divendres", 6 => "Dissabte"];
    echo "<p>Comanda processada el " . $dias[date("w")] . ", " . date("d"). " " . $meses[date("n")] . " " . date("Y") . " " . date("G:i") . "</p>";

    echo "<p>La seva comanda es la seguent: </p>";

    $totalqty = 0;
    $totalqty = $xocolataqty + $xicletsqty + $caramelsqty;

    echo "<p>Total articles: " . $totalqty ."</p>";

    if($totalqty == 0) {
        echo "Usted no va demanar res en la página anterior!";
    } else {
        if ($xocolataqty > 0) {
            echo htmlspecialchars($xocolataqty).' xocolata<br />';
        }
        if ($xicletsqty > 0) {
            echo htmlspecialchars($xicletsqty).' xiclets<br />';
        }
        if ($caramelsqty > 0) {
            echo htmlspecialchars($caramelsqty).' caramels<br />';
        }
    }

    function totalcompra($xocolataqty = 0, $xicletsqty = 0, $caramelsqty = 0) {

        $totalamount = 0.00;

        define('XOCOLATEPREU', 1.00);
        define('XICLETPREU', 0.50);
        define('CARAMELPREU', 1.50);

        $totalamount = $xocolataqty * XOCOLATEPREU + $xicletsqty * XICLETPREU + $caramelsqty * CARAMELPREU;

        echo "<p>Subtotal: " . number_format($totalamount, 2) . "€</p>";

        $tasa = 0.21; // IVA aplicat a la xocolata i altres golosines

        $totalamount = $totalamount * (1 + $tasa);

        echo "Total amb IVA: " . number_format($totalamount, 2) . "€</p>";
    }

    totalcompra($xocolataqty, $xicletsqty, $caramelsqty);

    ?>
</body>
</html>
