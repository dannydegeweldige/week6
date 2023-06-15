<?php
$tijd = date("H:i"); // Haal de huidige tijd op

if ($tijd < "12:00") {
    echo "Goedemorgen" . "<br>";
} elseif ($tijd >= "12:00" && $tijd < "18:00") {
    echo "Goedemiddag" . "<br>";
} else {
    echo "Goedenavond" . "<br>";
}



function berekenGemiddelde($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "Het gemiddelde is: " . $gemiddelde;
}

function dagenTotEindeJaar() {
    $huidigeDatum = date("Y-m-d");
    $eindeJaar = date("Y-12-31");
    $verschil = strtotime($eindeJaar) - strtotime($huidigeDatum);
    $dagenOver = floor($verschil / (60 * 60 * 24));
    echo "Aantal dagen tot het einde van het jaar: " . $dagenOver . "<br>";
}

dagenTotEindeJaar();

function berekenTotaleLengte($strings) {
    $totaleLengte = 0;
    foreach ($strings as $string) {
        $lengte = strlen($string);
        $totaleLengte += $lengte;
    }
    return $totaleLengte;
}

$array = array("danny", "meijer");
echo "Totale lengte: " . berekenTotaleLengte($array);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
</body>
</html>