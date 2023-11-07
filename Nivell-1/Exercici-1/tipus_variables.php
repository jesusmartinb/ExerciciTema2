<?php

$enter = 7;
$doble = 4.35;
$cadena = "Desde PHP";
$booleano = true;

echo $enter . "<br />";
echo $doble . "<br />";
echo $cadena . "<br />";
echo $booleano . "<br />";

define ( "NOMSENCER" , "Jesús Martín Blanco");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo NOMSENCER ?></h1>
</body>
</html>